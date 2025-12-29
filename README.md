📝 Danh Sách Công Việc Pro

Danh Sách Công Việc Pro là một ứng dụng quản lý nhiệm vụ cá nhân mạnh mẽ nhưng tối giản, được xây dựng trên nền tảng Laravel 12. Ứng dụng mang lại khả năng tương tác tức thì nhờ công nghệ Single Page Application (SPA).
✨ Tính năng nổi bật

    Trải nghiệm SPA mượt mà: Sử dụng Laravel Livewire 3 để xử lý mọi thao tác (Thêm, Xóa, Hoàn thành) mà không cần tải lại trang.

    Hệ thống Quản lý Dự án (Projects): * Phân loại công việc theo chuyên mục (Công việc, Cá nhân, Học tập...).

        Tùy chỉnh màu sắc nhận diện cho từng dự án.

        Giao diện quản lý dự án trực quan (Thêm/Sửa/Xóa ngay tại chỗ).

    Quản lý Hạn chót (Due Date): * Thiết lập ngày hoàn thành với bộ chọn lịch (Date Picker) tích hợp.

        Cảnh báo thông minh: Tự động đổi màu đỏ cho các nhiệm vụ đã quá hạn nhưng chưa hoàn thành.

    Bộ lọc thông minh: Chuyển đổi nhanh giữa việc xem tất cả nhiệm vụ hoặc lọc theo từng dự án cụ thể.

    Giao diện tinh tế (Clean UI): * Thiết kế chuẩn Todoist với tông màu đỏ chủ đạo #dc4c3e.

        Sử dụng font chữ Inter hiện đại và hệ thống Favicon đồng bộ.

🛠 Công nghệ sử dụng

    Backend: Laravel 12 (PHP 8.3+)

    Frontend Logic: Laravel Livewire 3

    Styling: Tailwind CSS & Google Fonts (Inter)

    Database: SQLite (Gọn nhẹ, không cần cài đặt server)

🚀 Hướng dẫn cài đặt nhanh

Dành cho môi trường Windows (Laragon/XAMPP):
1. Chuẩn bị

    PHP >= 8.3

    Composer

2. Các bước thiết lập
Bash

# 1. Tải dự án về máy
git clone https://github.com/username/todoist-laravel.git
cd todoist-laravel

# 2. Cài đặt các thư viện PHP
composer install

# 3. Tạo tệp cấu hình môi trường
copy .env.example .env

# 4. Khởi tạo Database SQLite
type nul > database/database.sqlite

# 5. Cấu hình file .env
# Chỉnh sửa: DB_CONNECTION=sqlite
# Xóa các dòng DB_DATABASE, DB_USERNAME khác.

# 6. Chạy Migration để tạo cấu trúc bảng
php artisan migrate

# 7. Khởi chạy ứng dụng
php artisan serve

Truy cập: http://127.0.0.1:8000
🤝 Hướng dẫn đóng góp (Contributing)

Chúng tôi luôn chào đón sự đóng góp từ cộng đồng!

    Fork dự án này.

    Tạo nhánh tính năng mới: git checkout -b feature/AmazingFeature.

    Commit các thay đổi của bạn: git commit -m 'Add some AmazingFeature'.

    Push lên nhánh đã tạo: git push origin feature/AmazingFeature.

    Mở một Pull Request.

🎨 Lộ trình phát triển (Roadmap)

    [x] Tích hợp Livewire (SPA).

    [x] Quản lý dự án đa năng và hệ thống màu sắc.

    [x] Quản lý Hạn chót (Due Date) với cảnh báo quá hạn.

    [ ] Tính năng Kéo thả (Drag & Drop) để sắp xếp thứ tự ưu tiên.

    [ ] Chế độ Dark Mode tự động.

    [ ] Thông báo đẩy (Push Notifications) khi sắp đến hạn.

📄 Giấy phép

Dự án được phát hành dưới giấy phép MIT. Bạn có thể tự do sử dụng và phát triển thêm.

🤝 Hướng dẫn đóng góp (Contributing)

Chúng tôi luôn chào đón sự đóng góp từ cộng đồng để dự án ngày càng hoàn thiện hơn! Để đảm bảo tính nhất quán và chất lượng mã nguồn, vui lòng tuân thủ quy trình sau:
1. Báo lỗi và đề xuất tính năng

Nếu bạn phát hiện lỗi (Bug) hoặc có ý tưởng mới, vui lòng mở một Issue và mô tả chi tiết:

    Với lỗi: Các bước để tái hiện lỗi, môi trường chạy (HĐH, trình duyệt) và ảnh chụp màn hình nếu có.

    Với đề xuất: Mô tả rõ lợi ích của tính năng và cách nó hoạt động.

2. Quy trình gửi Pull Request (PR)

Nếu bạn muốn trực tiếp sửa lỗi hoặc phát triển tính năng mới:

    Fork repository này về tài khoản cá nhân của bạn.

    Tạo một Branch mới cho tính năng hoặc bản sửa lỗi:
    Bash

git checkout -b feature/ten-tinh-nang # Hoặc fix/ten-loi

Thực hiện thay đổi và Commit với thông điệp rõ ràng:
Bash

git commit -m "Thêm tính năng lọc theo thời gian"

Push lên nhánh của bạn:
Bash

    git push origin feature/ten-tinh-nang

    Mở một Pull Request và mô tả chi tiết những gì bạn đã thay đổi.

3. Quy chuẩn mã nguồn (Coding Standards)

Để dự án luôn sạch sẽ, vui lòng:

    Tuân thủ tiêu chuẩn PSR-12 của PHP.

    Sử dụng Laravel Pint để định dạng mã nguồn nếu có thể (./vendor/bin/pint).

    Đảm bảo mã nguồn có chú thích (comment) ở những phần xử lý logic phức tạp.

🛡️ Bảo mật

Nếu bạn phát hiện bất kỳ lỗ hổng bảo mật nào, vui lòng không công khai trên Issue. Hãy gửi email trực tiếp cho chúng tôi qua địa chỉ: phongvanvu@gmail.com để được xử lý sớm nhất.
