📝 Danh Sách Công Việc - Laravel 12

Danh Sách Công Việc là một ứng dụng quản lý nhiệm vụ cá nhân tối giản, được xây dựng bằng framework Laravel. Dự án lấy cảm hứng từ giao diện sạch sẽ của Todoist, giúp người dùng ghi chép nhanh và hoàn thành công việc hiệu quả mỗi ngày.
✨ Tính năng chính

    Quản lý nhiệm vụ: Thêm, đánh dấu hoàn thành và xóa công việc nhanh chóng.

    Giao diện tối giản (Minimalist UI): Tập trung tối đa vào nội dung, loại bỏ các thành phần gây xao nhãng.

    Phản hồi thông minh: Hiển thị trạng thái trống (Empty State) sinh động và thông báo xác nhận khi xóa.

    Tương thích di động: Giao diện co giãn tốt (Responsive) trên mọi kích thước màn hình.

    Cơ sở dữ liệu nhẹ: Sử dụng SQLite, không cần cài đặt SQL Server phức tạp.

🛠 Công nghệ sử dụng

    Backend: Laravel 12 (Yêu cầu PHP 8.3+)

    Frontend: Tailwind CSS (Giao diện hiện đại, tinh tế)

    Database: SQLite (Lưu trữ tệp tin cục bộ)

    Font chữ: Inter (Chuẩn thiết kế ứng dụng hiện đại)

🚀 Hướng dẫn cài đặt

Để chạy dự án này trên máy tính của bạn (đặc biệt là môi trường Windows/Laragon), hãy thực hiện các bước sau:
1. Yêu cầu hệ thống

    PHP >= 8.3

    Composer

    Laragon hoặc XAMPP

2. Các bước thiết lập
Bash

# 1. Tải dự án về máy
git clone https://github.com/ten-cua-ban/todo-laravel.git
cd todo-laravel

# 2. Cài đặt các thư viện cần thiết
composer install

# 3. Tạo tệp cấu hình môi trường
copy .env.example .env

# 4. Tạo tệp cơ sở dữ liệu SQLite (Dành cho Windows CMD)
type nul > database/database.sqlite

# 5. Cấu hình .env
# Mở file .env và cập nhật dòng:
# DB_CONNECTION=sqlite
# (Xóa các dòng DB_DATABASE, DB_USERNAME khác)

# 6. Chạy Migration để tạo cấu trúc bảng
php artisan migrate

# 7. Khởi chạy ứng dụng
php artisan serve

Sau khi hoàn tất, hãy mở trình duyệt và truy cập: http://127.0.0.1:8000
🎨 Tư duy thiết kế UX

Dự án này chú trọng vào trải nghiệm "tiện và nhanh":

    Màu sắc: Sử dụng tông đỏ thương hiệu (#dc4c3e) tạo cảm giác năng động.

    Tương tác: Các nút bấm có hiệu ứng chuyển màu mềm mại, nút xóa chỉ xuất hiện khi di chuột qua để giữ sự tinh giản.

    Năng suất: Hộp nhập liệu nằm ngay đầu trang để người dùng có thể lưu lại ý tưởng ngay lập tức.

📅 Lộ trình phát triển (Roadmap)

    [x] Hoàn thiện chức năng Thêm/Sửa/Xóa cơ bản.

    [x] Việt hóa toàn bộ giao diện.

    [ ] Tích hợp Livewire để ứng dụng chạy mượt mà không cần tải lại trang (AJAX).

    [ ] Thêm tính năng Phân loại theo Dự án.

    [ ] Gắn nhãn Mức độ ưu tiên (Priority labels).

📄 Giấy phép

Dự án này được phát hành dưới giấy phép MIT. Bạn hoàn toàn có thể sử dụng và phát triển thêm cho mục đích học tập hoặc cá nhân.