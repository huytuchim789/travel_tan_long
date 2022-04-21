@component('mail::message')
<h2>Xin chào {{$book->user->name}},</h2>
<p>Bạn đã đặt tour thành công <span style="color:red;font-size:bold;">{{$book->tour->name}}</span></p>
<p>Chuyến đi của bạn sẽ bắt đầu vào <span style="color:red;font-size:bold;">{{$book->start_book}}</span> và kết thúc vào ngày <span style="color:red;font-size:bold;">{{$book->end_book}}</span></p>
<p>Xin vui lòng thanh toán 1 nửa tiền cọc <span style="color:red;font-size:bold;">{{$book->price}}</span> VNĐ vào tài khoản của công ty 19004804439 Techcombank Hanoitourist</p>
 
 
Khi nhận được tiền cọc chúng tôi sẽ gửi cho bạn các thủ tục còn lại để hoàn tất đặt tour. Chúc bạn có 1 ngày tuyệt vời!<br>
 
Cảm ơn<br>
{{ config('app.name') }}<br>

@endcomponent