                CREATE TABLE IF NOT EXISTS $tablename2
                (id_client int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                client_name VARCHAR(25) NOT NULL,
                client_email VARCHAR(25) NOT NULL,
                client_pass VARCHAR(25) NOT NULL,
                client_img VARCHAR(25) NOT NULL,
                client_review VARCHAR(50)
                );

                CREATE TABLE IF NOT EXISTS $tablename3
                (id_categ int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                categ_name VARCHAR(25) NOT NULL,
                categ_img VARCHAR(25) NOT NULL,
                id_gest int(11),
                FOREIGN KEY (id_gest) REFERENCES $tablename1(id_gest)
                );

                CREATE TABLE IF NOT EXISTS $tablename4
                (id_product int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                product_name VARCHAR(25) NOT NULL,
                product_price FLOAT NOT NULL,
                product_img VARCHAR(25) NOT NULL,
                id_categ int(11),
                id_gest int(11),
                FOREIGN KEY (id_categ) REFERENCES $tablename3(id_categ),
                FOREIGN KEY (id_gest) REFERENCES $tablename1(id_gest)
                );

                CREATE TABLE IF NOT EXISTS $tablename5
                (id_commande int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                date_commande date,
                id_client int(11),
                FOREIGN KEY (id_client) REFERENCES $tablename2(id_client)
                );

                CREATE TABLE IF NOT EXISTS $tablename6
                (id_product int(11),
                id_commande int(11),
                quantity int(25),
                FOREIGN KEY (id_product) REFERENCES $tablename4(id_product),
                FOREIGN KEY (id_commande) REFERENCES $tablename5(id_commande)
                );


                -- insérer les images dans la table products

                INSERT INTO products (product_name, product_price, product_img, product_hover) VALUES ('smartphone appo', 70000, 'images/product-1.jpg', 'images/product-1-hover.jpg'), ('camera', 20000, 'images/product-2.jpg', 'images/product-2-hover.jpg'), ('écran plat', 50000, 'images/product-3.jpg', 'images/product-3-hover.jpg'), ('haut parleur', 10000, 'images/product-4.jpg', 'images/product-4-hover.jpg'), ('speaker', 30000, 'images/product-5.jpg', 'images/product-5-hover.jpg'), ('montre intélligente', 15000, 'images/product-6.jpg', 'images/product-6-hover.jpg'), ('casque audio', 10000, 'images/product-7.jpg', 'images/product-7-hover.jpg'), ('smartphone samsung', 70000, 'images/product-8.jpg', 'images/product-8-hover.jpg'), ('camera samsung', 30000, 'images/product-9.jpg', 'images/product-9-hover.jpg'); 