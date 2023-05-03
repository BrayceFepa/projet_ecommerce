                CREATE TABLE IF NOT EXISTS clients
                (id_client int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                password VARCHAR(50) NOT NULL,
                client_img VARCHAR(50) NOT NULL,
                client_district VARCHAR(50) NOT NULL,
                client_review VARCHAR(100)
                );

                CREATE TABLE IF NOT EXISTS gestionnaires
                (id_gest int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                gest_name VARCHAR(50) NOT NULL,
                gest_email VARCHAR(50) NOT NULL,
                gest_pass VARCHAR(50) NOT NULL);

                CREATE TABLE IF NOT EXISTS categories
                (id_categ int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                categ_name VARCHAR(50) NOT NULL,
                categ_img VARCHAR(50) NOT NULL,
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
                paiement int(100), 
                user_id int(100) NOT NULL,
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


                -- insérer les images dans la table produits

                INSERT INTO products (product_name, product_price, product_img, product_hover) VALUES ('chips', 15000, 'images/products/product-1.jpg', 'images/products/product-1-hover.jpg'), ('tablette de chocolat', 2000, 'images/products/product-2.jpg', 'images/products/product-2-hover.jpg'), ('drones tagus', 500000, 'images/products/product-3.jpg', 'images/products/product-3-hover.jpg'), ("Accordé avec fraude", 13000, 'images/products/product-7.jpg', 'images/products/product-7-hover.jpg'), ('le jeune entrepreneur africain', 13000, 'images/products/product-5.jpg', 'images/products/product-5-hover.jpg'), ('détartrant ASA', 10000, 'images/products/product-6.jpg', 'images/products/product-6-hover.jpg'), ('crème Leave In', 10000, 'images/products/product-4.jpg', 'images/products/product-4-hover.jpg'), ('champoing ASA', 12000, 'images/products/product-8.jpg', 'images/products/product-8-hover.jpg'), ('pattes miondonini', 500, 'images/products/product-9.jpg', 'images/products/product-9-hover.jpg');


                -- inserer les images dans la table categories

                INSERT INTO categories (categ_name, categ_img) VALUES ('technologie', 'images/categories/cat_img2.png'), ('lecture', 'images/categories/cat_img3.png'), ('agro-alimentaire','images/categories/cat_img4.png'), ('cosmétiques', 'images/categories/cat_img5.png'), ('aéronotique', 'images/categories/cat_img1.png'),('agriculture', 'images/categories/cat_img6.png'), ('auto-mobile', 'images/categories/cat_img7.png');
                
                                -- inserer quelques clients

                INSERT INTO clients (name, email, password, client_district ) VALUES ('Alexandre', 'alexandre@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'douala'), ('John', 'john@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'douala'), ('Loic', 'loic@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'douala'), ('Thomas', 'thomas@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'douala');