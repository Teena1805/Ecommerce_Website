# 🛒 eCommerce Platform – PHP & MySQL

This is a fully functional eCommerce web application built using **PHP**, **MySQL**, and **HTML/CSS**, with separate modules for **customers** and **admins**. The platform allows users to browse products, manage their shopping cart, and register/login. Admins can log in to manage the store’s product listings.

---

## 🚀 Features Overview

### 👤 User Features

- **Register** on the platform (`pages/register.php`) using name, email, and password.
- **Login/Logout** securely (`pages/login.php` / `pages/logout.php`).
- **Browse products** on the homepage (`index.php`) with details like name, price, and image.
- **Add products to cart** and manage them (`pages/cart.php`).
- Session-based login and cart tracking.

### 🛠 Admin Features

- **Admin login/logout** via `admin/login.php` and `admin/logout.php`.
- **Dashboard** access (`admin/dashboard.php`) to manage the platform.
- **Add new products** with name, price, description, and image upload (`admin/add_product.php`).
- **Edit/Delete products** from the store (`admin/edit_product.php`, `admin/delete_product.php`).
- **Bulk upload** products via CSV (in `add_product.php`).

---
# ✅ Prerequisites
## 💻 System Requirements
- A Windows, macOS, or Linux machine
- Basic understanding of PHP and MySQL
- Internet browser (e.g., Chrome, Firefox)

## 🧰 Software Requirements
| Tool                                                         | Version (Recommended) | Purpose                          |
| ------------------------------------------------------------ | --------------------- | -------------------------------- |
| [XAMPP](https://www.apachefriends.org/)                      | 7.4+                  | Apache server + MySQL + PHP      |
| [VS Code](https://code.visualstudio.com/) or any code editor | Latest                | Editing project files            |
| Web Browser                                                  | Any modern browser    | To test the UI and functionality |
| Git (optional)                                               | Latest                | To clone/push to GitHub          |

## 📂 Project Files Required
- Complete source code folder (ecommerce/)
- Database SQL file (e.g., ecommerce.sql)
- Product images (for single and bulk uploads)
- CSV file for bulk product upload (optional)

## 📑 Database Setup
1. Start XAMPP (Apache + MySQL)
2. Go to http://localhost/phpmyadmin
3. Create a new database (e.g., ecommerce)
4. Import your SQL dump file (e.g., ecommerce.sql) into this DB

## ⚙️ Configuration Steps
- Place the project in C:\xampp\htdocs\ecommerce
- Ensure images are inside the /images/ folder
- Update database credentials in:
```php
includes/db.php
``` 


## 🗄️ Database Structure

### `users` Table

| Column    | Type     | Description                     |
|-----------|----------|---------------------------------|
| id        | INT      | Primary key                     |
| name      | VARCHAR  | User's full name                |
| email     | VARCHAR  | User's email (unique)           |
| password  | VARCHAR  | Hashed password                 |
| role      | VARCHAR  | Either `user` or `admin`        |

### `products` Table

| Column     | Type     | Description                    |
|------------|----------|--------------------------------|
| id         | INT      | Primary key                    |
| name       | VARCHAR  | Product name                   |
| price      | DECIMAL  | Product price                  |
| description| TEXT     | Product description            |
| image      | VARCHAR  | Image file name (stored path)  |

### `cart` Table

| Column      | Type     | Description                   |
|-------------|----------|-------------------------------|
| id          | INT      | Primary key                   |
| user_id     | INT      | Foreign key from users table  |
| product_id  | INT      | Foreign key from products     |
| quantity    | INT      | Quantity of the product       |

---

## 🔐 Security Features

- Passwords are hashed using `password_hash()` before storing.
- Session management restricts access to authenticated users.
- Admin access is validated using the `role` field in the users table.
- SQL queries are securely written using prepared statements (`PDO`).

---

## 🔄 Flow of Actions

### User Flow:
1. Register → Login → View Products → Add to Cart → Manage Cart → Logout

### Admin Flow:
1. Login → Dashboard → Add/Edit/Delete Products → Logout

### Product Display:
- Products added by the admin appear on the homepage (`index.php`) for users to browse and add to cart.

---

## 📁 Project Structure
```
ecommerce/
│
├── index.php                 # Main landing page
├── test_db.php              # (Optional) Test DB connection
├── hash.php                 # (Optional) Password hashing or testing
│
├── css/
│   └── style.css            # Global stylesheet
│
├── includes/
│   └── db.php               # Database connection file
│
├── admin/                   # Admin panel (admin-side only)
│   ├── add_product.php
│   ├── dashboard.php
│   ├── delete_product.php
│   ├── edit_product.php
│   ├── login.php
│   ├── logout.php
│   └── manage_products.php
│
├── pages/                   # User-facing site (frontend)
│   ├── cart.php
│   ├── login.php
│   ├── logout.php
│   └── register.php
│
└── images/                  # Product images (used by admin and user views)
    ├── product1.jpg
    └── product2.jpg
```
---

## 🧪 How to Run the Project

1. Start **XAMPP** or **WAMP** and run Apache + MySQL.
2. Place the project inside `htdocs/` (for XAMPP).
3. Create a database (e.g., `ecommerce`) and import the provided `.sql` file.
4. Update database credentials in `includes/db.php`.
5. Open your browser and navigate to:
```
http://localhost/ecommerce/
```
- Image files must already exist in the /images/ folder.
- Bulk upload of products can also be done using a CSV file.
- csv file format:
```csv
name,price,description,image
Product A,100.00,High-quality item,image1.jpg
Product B,250.00,Top-rated product,image2.jpg
```

## 📄 License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
This project is for educational and demonstration purposes. Feel free to fork, clone, or contribute.
