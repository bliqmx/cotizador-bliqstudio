CREATE TABLE IF NOT EXISTS users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(100) UNIQUE,
 password_hash VARCHAR(255)
);

INSERT INTO users (email,password_hash) VALUES
('admin@bliqstudio.mx','$2y$10$L9dV3g38kY0i7U2qHq2QduFv3bJc5r1yq3q4q7tWgT6qOq9k2I6vK')
ON DUPLICATE KEY UPDATE email=email;

CREATE TABLE IF NOT EXISTS catalog(
 id INT AUTO_INCREMENT PRIMARY KEY,
 category VARCHAR(100),
 name VARCHAR(100),
 price DECIMAL(10,2)
);

INSERT INTO catalog(category,name,price) VALUES
('Packaging','Caja kraft pequeña',120.00),
('Packaging','Caja kraft grande',220.00);
