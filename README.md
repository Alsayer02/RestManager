# 🍽️ RestManager - Full Restaurant ERP Solution

RestManager is a specialized management system designed to streamline restaurant operations, from the kitchen to the customer's bill. It focuses on real-time data management and operational efficiency.

## 🚀 Technical Highlights
* **Resource Management:** Comprehensive modules for managing tables, staff roles, and digital menus.
* **Point of Sale (POS):** A streamlined interface for processing orders, handling multiple payment methods, and generating receipts.
* **Operational Workflow:** Real-time tracking of order statuses between the front-of-house and the kitchen.
* **Data Insights:** Dashboard logic to calculate daily revenue, popular menu items, and peak hours.
* **Database Design:** Sophisticated relationships ($Many-to-Many$) for orders and menu items with pivot table data.

## 🛠 Tech Stack
* **Framework:** Laravel 
* **Logic Separation:** Implementation of Service Classes to keep controllers slim and maintainable.
* **Database:** MySQL with indexed columns for fast searching.

## ⚙️ Setup Instructions
1. `git clone https://github.com/Alsayer02/RestManager.git`
2. `composer install`
3. `php artisan migrate`
4. `php artisan serve`
