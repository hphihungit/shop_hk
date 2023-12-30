<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Services\CartService;
use App\Models\Momo;
use App\Models\VNpay;
use App\Models\User;
use App\Http\Services\Account\AccountService;

class CartController extends Controller
{
    protected $cartService;
    protected $user;

    public function __construct(
        CartService $cartService,
        AccountService $user
    ) {
        $this->cartService = $cartService;
        $this->user = $user;
    }

    public function index(Request $request)
    {
        if (Session::has('login_required') && Session::get('login_required')) {
            $message = Session::get('message');
            return view('admin.users.login')->with('message', $message);
        }
        $result = $this->cartService->create($request);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/carts');
    }

    public function show()
    {
        $products = $this->cartService->getProduct();

        return view('carts.list', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'user' => $this->user->show(),
            'carts' => Session::get('carts')
        ]);
    }

    public function update(Request $request)
    {
        $this->cartService->update($request);

        return redirect('/carts');
    }
    public function remove($id = 0)
    {
        $this->cartService->remove($id);

        return redirect('/carts');
    }
    public function addCart(Request $request)
    {
        if (Session::has('login_required') && Session::get('login_required')) {
            $message = Session::get('message');
            return view('admin.users.login')->with('message', $message);
        }
        $this->cartService->addCart($request);

        return redirect()->back();
    }
    public function show2(Request $request)
    {
        $products = $this->cartService->getProduct();
        if (isset($_GET['partnerCode'])) {
            $data_momo = [
                'partnerCode' => $_GET['partnerCode'],
                'orderId' => $_GET['orderId'],
                'requestId' => $_GET['requestId'],
                'amount' => $_GET['amount'],
                'orderInfo' => $_GET['orderInfo'],
                'orderType' => $_GET['orderType'],
                'transId' => $_GET['transId'],
                'payType' => $_GET['payType'],
                'signature' => $_GET['signature'],
            ];

            $result = Momo::create($data_momo);;
        } else if (isset($_GET['vnp_Amount'])) {
            $data_vnpay = [
                'vnp_Amount' => $_GET['vnp_Amount'],
                'vnp_BankCode' => $_GET['vnp_BankCode'],
                'vnp_BankTranNo' => $_GET['vnp_BankTranNo'],
                'vnp_CardType' => $_GET['vnp_CardType'],
                'vnp_OrderInfo' => $_GET['vnp_OrderInfo'],
                'vnp_PayDate' => $_GET['vnp_PayDate'],
                'vnp_ResponseCode' => $_GET['vnp_ResponseCode'],
                'vnp_TmnCode' => $_GET['vnp_TmnCode'],
                'vnp_TransactionNo' => $_GET['vnp_TransactionNo'],
                'vnp_TransactionStatus' => $_GET['vnp_TransactionStatus'],
                'vnp_TxnRef' => $_GET['vnp_TxnRef'],
                'vnp_SecureHash' => $_GET['vnp_SecureHash'],
            ];

            $result = VNpay::create($data_vnpay);;
        }
        return view('carts.thank', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }
    public function payment_vnpay(Request $request)
    {
        // chuyển đến url này
        $vnp_ReturnurlSuccess = "http://127.0.0.1:8000/thank"; // URL for successful payment
        $vnp_ReturnurlFailure = "http://127.0.0.1:8000/carts";
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // khi thành công sẽ redirect đến url này
        $vnp_Returnurl = "http://127.0.0.1:8000/thank";
        $vnp_TmnCode = "XUNZJ46Y"; //Mã website tại VNPAY 
        $vnp_HashSecret = "JCITOCAHMGDPBJQBEFSVPHVMFMMIHQCB"; //Chuỗi bí mật
        // Lấy ra tổng tiền
        $total = $request->input('total');
        $code_cart = rand(00, 999);
        $vnp_TxnRef = $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Test Thanh Toán Đơn Hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        //Billing
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url,
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            $paymentStatus = $this->determinePaymentStatus();
            // Assuming that you have a variable $paymentStatus indicating success or failure
            if ($paymentStatus === 'success') {
                // Redirect to the success URL
                return redirect()->to($vnp_ReturnurlSuccess)->with('success', 'Đặt Hàng Thành Công');
            } else {
                // Redirect to the failure URL
                return redirect()->to($vnp_ReturnurlFailure)->with('error', 'Thanh Toán Thất Bại');
            }
        }
        return redirect()->to($vnp_Returnurl)->with('success', 'Đặt Hàng Thành Công');
    }
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function payment_momo(Request $request)
    {

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        // khai báo thông tin 
        $total = $request->input('total');
        $name_product = $request->input('name_product');

        $orderInfo = $name_product;
        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $amount =  $total;
        $orderId = time() . "";
        // khi thanh toán thành công -> trả về url này
        $redirectUrl = "http://127.0.0.1:8000/thank";
        $ipnUrl = "http://127.0.0.1:8000/thank";
        $extraData = "";

        $requestId = time() . "";
        //
        $requestType = "payWithATM";
        // thanh toán QR
        // $requestType = "captureWallet";
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        //Just a example, please check more in there
        return redirect()->to($jsonResult['payUrl']);
    }
}
