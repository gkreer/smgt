ALTER TABLE  `liquidacion` ADD  `montoEfectivo` INT NOT NULL AFTER  `montoCredito` ;
ALTER TABLE  `gasto` ADD  `fecha` DATETIME NOT NULL AFTER  `id` ;