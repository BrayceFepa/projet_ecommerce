                CREATE TABLE IF NOT EXISTS clients
                (id_client int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                password VARCHAR(50) NOT NULL,
                client_img VARCHAR(50) NOT NULL,
                client_review VARCHAR(50),
                );

                CREATE TABLE IF NOT EXISTS gestionnaires
                (id_gest int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                gest_name VARCHAR(50) NOT NULL,
                gest_email VARCHAR(50) NOT NULL,
                gest_pass VARCHAR(50) NOT NULL);

                CREATE TABLE IF NOT EXISTS categories
                (id_categ int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                categ_name VARCHAR(25) NOT NULL,
                categ_img VARCHAR(25) NOT NULL,
                id_gest int(11),
                FOREIGN KEY (id_gest) REFERENCES gestionnaires(id_gest)
                );

                CREATE TABLE IF NOT EXISTS products
                (id_product int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(50) NOT NULL,
                product_price FLOAT NOT NULL,
                product_img VARCHAR(50) NOT NULL,
                quantity int(50),
                id_categ int(11),
                id_gest int(11),
                product_hover VARCHAR(50),
                FOREIGN KEY (id_categ) REFERENCES categories(id_categ),
                FOREIGN KEY (id_gest) REFERENCES gestionnaires(id_gest)
                );

                CREATE TABLE IF NOT EXISTS commandes
                (id_commande int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                date_commande date,
                id_client int(11),
                FOREIGN KEY (id_client) REFERENCES clients(id_client)
                );

                CREATE TABLE IF NOT EXISTS command_prod
                (id_product int(11),
                id_commande int(11),
                quantity int(25),
                FOREIGN KEY (id_product) REFERENCES products(id_product),
                FOREIGN KEY (id_commande) REFERENCES commandes(id_commande)
                );

                CREATE TABLE IF NOT EXISTS cart
                (id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                price FLOAT NOT NULL,
                product_img VARCHAR(50) NOT NULL,
                user_id int(100) NOT NULL,
                quantity int(100)
                );


                -- insérer les images dans la table products

                INSERT INTO products (product_name, product_price, product_img, product_hover) VALUES ('smartphone appo', 70000, 'images/product-1.jpg', 'images/product-1-hover.jpg'), ('camera', 20000, 'images/product-2.jpg', 'images/product-2-hover.jpg'), ('écran plat', 50000, 'images/product-3.jpg', 'images/product-3-hover.jpg'), ('haut parleur', 10000, 'images/product-4.jpg', 'images/product-4-hover.jpg'), ('speaker', 30000, 'images/product-5.jpg', 'images/product-5-hover.jpg'), ('montre intélligente', 15000, 'images/product-6.jpg', 'images/product-6-hover.jpg'), ('casque audio', 10000, 'images/product-7.jpg', 'images/product-7-hover.jpg'), ('smartphone samsung', 70000, 'images/product-8.jpg', 'images/product-8-hover.jpg'), ('camera samsung', 30000, 'images/product-9.jpg', 'images/product-9-hover.jpg');


                -- inserer les images dans la table categories

                INSERT INTO categories (categ_name, categ_img) VALUES ('televiseurs', 'images/cat_img1.png'), ('smartphones', 'images/cat_img2.png'), ('casques audio', 'images/cat_img3.png'), ('montres connectees','images/cat_img4.png'), ('manettes', 'images/cat_img5.png'),('caméra', 'images/cat_img6.png'), ('bafles', 'images/cat_img7.png');