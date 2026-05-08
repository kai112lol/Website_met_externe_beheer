<?php
    $sql = "SELECT customer_id, customer_code, first_name, last_name, gender, date_of_birth, email, phone, street, house_number, postal_code, city, country, registration_date, customer_status, loyalty_points, newsletter_subscribed, notes, created_at, updated_at FROM customers ORDER BY customer_id DESC";

    $customerresult = $conn->query($sql);
?>