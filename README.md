📝 Danh Sách Công Việc Pro

Danh Sách Công Việc Pro là một ứng dụng quản lý nhiệm vụ cá nhân mạnh mẽ nhưng tối giản, được xây dựng trên nền tảng Laravel 12. Ứng dụng mang lại khả năng tương tác tức thì nhờ công nghệ Single Page Application (SPA).
✨ Tính năng nổi bật

    Trải nghiệm SPA mượt mà: Sử dụng Laravel Livewire 3 để xử lý mọi thao tác (Thêm, Xóa, Hoàn thành) mà không cần tải lại trang.

    Hệ thống Quản lý Dự án (Projects): * Phân loại công việc theo danh mục chuyên sâu.

        Tùy chỉnh màu sắc nhận diện cho từng dự án.

        Giao diện quản lý dự án trực quan (Thêm/Sửa/Xóa ngay tại chỗ).

    Bộ lọc thông minh: Chuyển đổi nhanh giữa việc xem tất cả nhiệm vụ hoặc lọc theo từng dự án cụ thể chỉ với một cú click.

    Giao diện tinh tế (Clean UI):

        Sử dụng Tailwind CSS và font chữ Inter hiện đại.

        Hệ thống biểu tượng (Favicon) đồng bộ.

        Hiệu ứng phản hồi thị giác khi hoàn thành công việc.

    Cơ sở dữ liệu tối ưu: Sử dụng SQLite tích hợp, giúp triển khai dự án nhanh chóng mà không cần cấu hình server phức tạp.

🛠 Công nghệ sử dụng

    Backend: Laravel 12 (PHP 8.3+)

    Frontend Logic: Laravel Livewire 3

    Styling: Tailwind CSS & Google Fonts (Inter)

    Database: SQLite

🚀 Hướng dẫn cài đặt nhanh

Dành cho môi trường Windows (Laragon/XAMPP):
1. Chuẩn bị

    PHP >= 8.3

    Composer

2. Các bước thiết lập
Bash

# 1. Clone dự án
git clone https://github.com/username/todoist-laravel.git
cd todoist-laravel

# 2. Cài đặt Dependencies
composer install

# 3. Cấu hình môi trường
copy .env.example .env

# 4. Khởi tạo Database SQLite
type nul > database/database.sqlite

# 5. Cấu hình .env
# Mở file .env và cập nhật các dòng sau:
# DB_CONNECTION=sqlite
# (Xóa các dòng DB_DATABASE, DB_USERNAME, DB_PASSWORD dư thừa)

# 6. Thực thi Migration
php artisan migrate

# 7. Khởi chạy ứng dụng
php artisan serve

Truy cập: http://127.0.0.1:8000 hoặc http://todo.test (nếu dùng Laragon).
🎨 Kiến trúc dự án (UX/UI)

Dự án được xây dựng dựa trên triết lý "Năng suất thông qua sự tối giản":

    Hộp thư đến (Inbox): Điểm xuất phát cho mọi ý tưởng, dễ dàng gán dự án ngay khi tạo.

    Màu sắc dự án: Sử dụng bảng màu chuẩn để người dùng nhận diện công việc theo thị giác nhanh hơn.

    Tính nhất quán: Favicon và giao diện được thiết kế đồng bộ với tông đỏ chủ đạo #dc4c3e.

📅 Lộ trình phát triển (Roadmap)

    [x] Tích hợp Livewire (SPA).

    [x] Quản lý dự án đa năng và hệ thống màu sắc.

    [x] Bộ lọc công việc theo dự án thời gian thực.

    [x] Hệ thống Favicon và Layout chuẩn.

    [ ] Thêm tính năng Hạn chót (Due Date) với lịch chọn ngày.

    [ ] Tính năng Kéo thả (Drag & Drop) để sắp xếp thứ tự ưu tiên.

    [ ] Chế độ Dark Mode tự động dựa trên hệ thống.

📄 Giấy phép

Dự án được phát hành dưới giấy phép MIT. Bạn có thể tự do sử dụng cho mục đích cá nhân hoặc làm nền tảng để phát triển các ứng dụng thương mại.