📝 Danh Sách Công Việc Pro (Laravel Livewire Edition)

Danh Sách Công Việc là một ứng dụng quản lý nhiệm vụ hiện đại, mượt mà được xây dựng trên nền tảng Laravel 12 và Livewire. Ứng dụng mô phỏng trải nghiệm người dùng cao cấp của Todoist, cho phép tương tác thời gian thực mà không cần tải lại trang.
✨ Tính năng đã hoàn thiện

    Trải nghiệm Single Page (SPA): Sử dụng Laravel Livewire để Thêm, Xóa, và Hoàn thành công việc ngay lập tức (Zero Page Reload).

    Phân loại theo Dự án: * Tổ chức công việc theo các danh mục như: Công việc, Cá nhân, Học tập...

        Bộ lọc thông minh: Xem tất cả hoặc lọc theo từng dự án cụ thể.

    Giao diện chuẩn:

        Thiết kế tối giản với font chữ Inter sắc nét.

        Hiệu ứng Hover và chuyển cảnh mượt mà.

        Trạng thái trống (Empty State) thân thiện.

    Cơ sở dữ liệu: Sử dụng SQLite gọn nhẹ, phù hợp cho triển khai nhanh và phát triển cá nhân.

🛠 Công nghệ sử dụng

    Framework: Laravel 12.x

    Tương tác Real-time: Laravel Livewire 3.x

    Giao diện: Tailwind CSS (Responsive Design)

    Ngôn ngữ: PHP 8.3+

    Database: SQLite

🚀 Hướng dẫn thiết lập nhanh
1. Cài đặt môi trường

Đảm bảo bạn đã cài đặt PHP 8.3+, Composer và Laragon (hoặc môi trường tương đương).
2. Các bước triển khai
Bash

# Clone dự án
git clone https://github.com/ten-cua-ban/todo-laravel.git
cd todo-laravel

# Cài đặt các thư viện
composer install

# Cấu hình môi trường
copy .env.example .env

# Tạo file database (Dành cho Windows CMD)
type nul > database/database.sqlite

# Cấu hình .env thành: DB_CONNECTION=sqlite
# Chạy Migration
php artisan migrate

# Tạo dữ liệu mẫu cho Dự án (Tùy chọn)
php artisan tinker
>>> App\Models\Project::create(['name' => 'Công việc']);
>>> App\Models\Project::create(['name' => 'Học tập']);
>>> exit

# Chạy Server
php artisan serve

🎨 Điểm nhấn về UX (Trải nghiệm người dùng)

    Luồng xử lý: Người dùng chọn dự án -> Nhập tên việc -> Nhấn Enter. Hệ thống tự động gán dự án và hiển thị công việc mới ngay lập tức.

    Xác nhận an toàn: Tích hợp wire:confirm tiếng Việt cho hành động xóa, giúp tránh mất dữ liệu ngoài ý muốn.

    Phản hồi thị giác: Các task hoàn thành được gạch ngang và làm mờ theo đúng nguyên lý thiết kế "Dopamine Hit", giúp người dùng cảm thấy hài lòng khi xong việc.

📅 Lộ trình tiếp theo (Roadmap)

    [x] Tích hợp Livewire (SPA).

    [x] Hệ thống quản lý và lọc theo Dự án.

    [ ] Thêm tính năng Hạn chót (Due Date) với lịch chọn ngày.

    [ ] Chế độ Dark Mode tự động.

    [ ] Tính năng Kéo thả (Drag & Drop) để sắp xếp thứ tự ưu tiên.

📄 Giấy phép

Dự án phát hành dưới giấy phép MIT.