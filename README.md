<H1 align ="center" >SHOELIKE (ECOMMERCE)<br/>{ Congglee }</h1>
<h5  align ="center">SHOELIKE, an e-commerce website dedicated to offering a diverse range of shoes. Designed using the MVC pattern. Our website specializes in delivering a curated collection of shoes for various preferences and occasions, enhancing the shopping experience for shoe enthusiasts.
</h5>
<br/>

- [⚙️ Configuration and Setup](#configuration-and-setup)
- [🚀 Key Features](#key-features)
- [🖥️ Technologies used](#technologies-used)
  - [Frontend](#frontend)
  - [Backend](#backend)
  - [Database](#database)
- [📸 Screenshots](#screenshots)
- [Author](#author)

## Configuration and Setup

To run this project locally, follow these steps:

1. **Clone or Download the Repository:**

- Fork and clone the repository using Git, or download it as a ZIP file and unzip it on your local machine.

2. **Install XAMPP:**

- XAMPP is required for hosting a local server and MySQL database. If you haven't installed it, follow these steps:
  - Download XAMPP from the official website: [XAMPP Download](https://www.apachefriends.org/index.html).
  - Install XAMPP by running the downloaded installer.
  - Launch the XAMPP control panel and start the Apache and MySQL services.

3. **Database Setup:**

- Open a web browser and navigate to `http://localhost/phpmyadmin/` to access the phpMyAdmin dashboard.
- Create a new database for your project (e.g., "shoelike_db").
- Import Data:
  - In your project's directory, you'll find a `data.sql` file. This file contains the database structure and initial data.
  - In phpMyAdmin, select your newly created database and click on the "Import" tab.
  - Choose the data.sql file and click "Go" to import the data into the database.

4. **Project Configuration:**

- Open the project in your preferred code editor.
- Locate any configuration files (like `.env` or `config.php`) that might store database connection settings (in this project it is `pdo.php` in the models folder).
- Update the database connection settings (such as host, username, password, and database name) to match your XAMPP configuration.

5. **Running the Project:**

- With XAMPP's Apache and MySQL services running, open your web browser.
- Type `http://localhost/` followed by the path to your project's main file (e.g., `http://localhost/shoelike/`).
- You should now see your SHOELIKE project running locally.

6. **Testing:**

- Test the various features of the website to ensure everything is working as expected.
- Explore different pages, functionalities, and interactions.

## Key Features

- Login/Register/Logout User Account
- Update Profile/Password User Account
- Cart Add/Remove Items | Update Quantities
- Products Pagination
- Product Search
- My Orders
- Product Filters Based on Category/Ratings | Price Range
- Order Details of All Ordered Item
- Review Products User Account
- Payment for orders via VNPAY portal, MOMO e-wallet
- Admin: Dashboard access to only admin roles
- Admin: Update Order Status | Delete Order
- Admin: Add/Update Products
- Admin: Update User Data | Delete User
- Admin: List Review of Product | Delete Review
- Admin: Statistics on the number of categories and products in each category

<br/>
 
## Technologies Used

This project was created using the following technologies.

#### Frontend

- [Bootstrap](https://getbootstrap.com/) - A front-end framework that provides a set of pre-made components and styles to make it easier to build responsive web pages.
- [CSS](https://www.css3.com/) - A style sheet language that is used to control the appearance of web pages.
- [SCSS](https://sass-lang.com/) - A preprocessor for CSS that adds features like variables, mixins, and functions.
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) - A preprocessor for CSS that adds features like variables, mixins, and functions.
- [Slick Slider](https://kenwheeler.github.io/slick/) - A scripting language that is used to create interactive web pages.

#### Backend

- [PHP](https://www.php.net/) - A server-side scripting language that is used to create dynamic web pages.

#### Database

- [MySQL](https://www.mysql.com/) - A relational database management system (RDBMS) that is used to store and manage data.

#### Design Pattern

- [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller): A software design pattern that separates the application into three layers: the model, the view, and the controller.

## Screenshots

![img-1](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319734/extends/shoeLike_homepage_3_doj81d.png)

---

![img-2](https://res.cloudinary.com/di3eto0bg/image/upload/v1693320896/extends/shoelike_productspage_3_wfleyx.png)

---

![img-4](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319203/extends/shoelike_productdetailpage_vtdppz.png)

---

![img-5](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319202/extends/shoelike_cartpage_zapqdv.png)

---

![img-6](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319202/extends/shoelike_loginpage_iv8z6d.png)

---

![img-7](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319202/extends/shoelike_registerpage_jfvkok.png)

---

![img-8](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319905/extends/shoelike_checkoutinfopage_2_f1oxve.png)

---

![img-9](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319982/extends/shoelike_checkoutpaymentpage_2_jevyhk.png)

---

![img-10](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319202/extends/shoelike_dashboard_gjlz9u.png)

---

![img-11](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319201/extends/shoelike_admincategorylist_tfuctq.png)

---

![img-12](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319201/extends/shoelike_addproduct_ns1mvi.png)

---

![img-13](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319201/extends/shoelike_adiminproductlist_tbru3a.png)

---

![img-14](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319201/extends/shoelike_addcategory_y5ibhd.png)

---

![img-15](https://res.cloudinary.com/di3eto0bg/image/upload/v1693320144/extends/shoelike_updateuserinfo_3_f5733o.png)

---

![img-16](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319200/extends/shoelike_static_dji13h.png)

---

![img-17](https://res.cloudinary.com/di3eto0bg/image/upload/v1693319200/extends/shoelike_userorders_ydegfc.png)

## Author

- Github: [Congglee](https://github.com/Congglee/)
- Email: [congldqn888@gmail.com](congldqn888@gmail.com)
