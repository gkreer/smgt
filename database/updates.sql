ALTER TABLE  `liquidacion` ADD  `montoEfectivo` INT NOT NULL AFTER  `montoCredito` ;
ALTER TABLE  `gasto` ADD  `fecha` DATETIME NOT NULL AFTER  `id` ;

ALTER TABLE  `gasto` ADD  `created_at` DATETIME NOT NULL ,
ADD  `updated_at` DATETIME NOT NULL ;

ALTER TABLE  `gasto` ADD  `mes` INT NOT NULL AFTER  `fecha` ,
ADD  `anio` INT NOT NULL AFTER  `mes` ;