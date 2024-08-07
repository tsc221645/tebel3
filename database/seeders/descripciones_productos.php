<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class descripciones_productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Brio Wax'],
            ['name' => 'Limpi-o'],
            ['name' => 'Car Kool'],
            ['name' => 'Prodin Ferreteria'],
            ['name' => 'Shinola'],
            ['name' => 'Vis']
        ]);

        DB::table('products')->insert([
           [
                'name' => 'PASTA PARA LUSTRAR',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una  mezcla de ceras cien por ciento naturales que producen una capa protectora de alta duración resistente a rayones menores así como a la penetración y crecimiento de mohos en las superficies en que es aplicada. Recomendada para abrillantar pisos de cemento, madera, parquet, linolio, granito y otros.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
    
           [
                'name' => 'CERA LÍQUIDA PARA LUSTRAR',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Forma una capa protectora suficientemente gruesa para evitar la penetración de humedadmy consecuente crecimiento de hongos, mpps y musgos. Evita la erosion mecanica, al rayon de los zapatos y Resistencia a los químicos. Se aplica para abrillantar, dar acabado y proteger pisos  de cement, de madera, parquet, linolio, granito, muebles y otros.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'RUG SHAMPOO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Formulado para limpiar  y/o lavar alfombras, muebles tapizados, ya sea de casa o del vehículo, de cualquier material textil,. Logra remover suciedad de los rincones mas profundos de dichos materiales.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CERA LÍQUIDA ANTIDESLIZANTE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una cera autobrillante formulada para obtener brillo y protección inmediata  en un solo paso aplicando y dejando secar sobre el piso  en el cual se lustra. Cuando es lustrado despues de su aplicación el brillo aumenta más. Con características antideslizantes para máxima seguridad. Para abrillantar y proteger pisos de granito, madera, cerámicos y otros.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CERA LÍQUIDA PARA PISOS DE LOZA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Diseñada para abrillantar y proteger pisos de baldosa barnizada color rojizo de ladrillo, barro, etc. Abrillanta y renueva el color de la baldosa por medio de un colorante, coloración original de la baldosa. Protége la baldosa contra las inclemencias del tiempo y tránsito de personas.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 1,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Desinfectante',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Limpia, Desinfecta, Elimina virus y bacterias. Disponible en: Floral, Lavanda, Limón, Manzana y Neutro.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Jabón líquido para trastos',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Lava, Quita grasa, Desinfecta. Disponible en: Limón y Frutos rojos.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Alcol Spray',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un antibacterial y antiviral para desinfectar manos y superficies. Disponible en: 4 oz y 8 oz.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Refrigerantes Car Kool®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una solución acuosa de glicoles, inhibidores de corrosión y lubricantes que incrementan en más del doble la capacidad del sistema de enfriamiento, al aumentar su capacidad de transmisión de calor, elevando el punto de ebullición y protegiéndolo con su acción lubricante. El tratamiento para radiadores CAR-KOOL® con NPI (antidegradante químico protector), se puede utilizar en todo motor con sistema de enfriamiento por agua, ayudando a prevenir el recalentamiento bajo condiciones de extremo calor, situaciones de tráfico pesado y viajes por regiones montañosas.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Car Kool® 33%:',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Prediluido Es es un anticongelante de vida extendida basado en etilenglicol para motores de alto desempeño. Con Tecnología anticorrosiva que incorpora aditivos de rápida acción, para la protección de radiadores de hierro y aluminio.  Car Kool® 33% es una mezcla perfecta con alto desempeño en todas las condiciones climáticas, protege de las temperaturas extremas por su alto punto de ebullición y disminuye la necesidad de cambiar el refrigerante anualmente.  •	“Vida útil por 3 años”.    •	Especialmente para carros nuevos y de última generación.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Car Kool® 50%',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una fórmula concentrada que proporciona una máxima protección anticorrosiva y lubricante. Para motores de gasolina y diesel con radiadores de todo tipo de metal como hierro, aluminio, latón y/o acero. Car Kool® 50% cuenta con propiedades que proporcionan un sistema de refrigeración contra climas cálidos y fríos. Puede utilizarse en todas las marcas de vehículos, livianos y  de trabajo pesado.   •	Provee protección extendida por 5 años o 150,000 millas (341,000 km.) •	Listo para usarse, sin diluirlo con agua. •	Temperatura de congelamiento -37ºC y temperatura de ebullición + 173 ºC. •	Disminuye los costos de mantenimiento a largo plazo.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'Refrigerante Car Kool® Diesel',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'es un refrigerante de vida extendida basado en etilenglicol para motores de diesel. Este producto protege contra la corrosión de superficies de hierro, aluminio, latón, cobre, acero y soldadura. Contiene inhibidores y desincrustantes adicionales para prevenir la acumulación de depósitos y mantener en buen funcionamiento el sistema de refrigeración.   Puede utilizarse en todas las marcas de vehículos de trabajo pesado con todo tipo de radiador. Recomendado   para mantener la temperatura estable del motor en climas cálidos o fríos.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'AGUA DESTILADA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'vida para la batería. Solución libre de iones (desionizada), para el buen funcionamiento de su batería. Para renovar el nivel del electrolito de baterías nuevas, cuando la pérdida es por evaporación.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ACTIVADOR ELECTROLÍTICO ACTIVADOR ELECTROLITICO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'nueva vida para la batería. Solución de   ácido sulfúrico, determinante en el proceso de generación de corriente eléctrica en una batería. Recomendado para reponer el nivel del electrolito en baterías usadas, con derrame de líquido y para reactivar baterías en las cuales la gravedad específica ya no llega a valores permisibles.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ACTIVADOR ELECTROLÍTICO CONCENTRADO 1,250',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'El Activador Electrolítico Concentrado 1250 de densidad, es una solución de ácido sulfúrico y agua. Es la materia activa de la batería y se conoce como Electrólito, provoca una reacción química con los eléctrodo de plomo (+/-) generando una corriente eléctrica. Asegurando una máxima eficiencia energética en la carga de la batería.  •	Diseñado para la activación de baterías nuevas.  •	Batería totalmente cargada: 1250 a 1280.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PISTON PROTECTOR',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Aditivo para aumentar el rendimiento del aceite y reducir su consumo, mejorar la lubricación del motor, creando una película protectora que evita el contacto metal contra metal; contiene un aditivo que aumenta las características de viscosidad, mejorando por lo tanto la lubricación a altas temperaturas. La película protectora que forma en las paredes de los cilindros restaura la compresión, aumenta la potencia y disminuye el ruido excesivo en motores gastados.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PISTON PROTECTOR PRODIN®:',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'da longevidad a su motor. Puede utilizarse en motores diésel y gasolina.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIMPIA INYECTORES - GASOLINE TREATMENT',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Restaura la fuerza del motor, limpia inyectores sucios, ayuda a reducir las emisiones de gases, disuelve la película pegajosa acumulada en los inyectores o carburadores del sistema. No daña los sensores de oxígeno, convertidores catalíticos, ni al ambiente. Para motores carburados e inyectados.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIMPIA INYECTORES - DIESEL TREATMENT',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Lubrica partes vitales, protección contra el óxido y la corrosión, reduce el humo negro, extiende la vida de los inyectores de combustible, mantiene más limpios los inyectores, mejora el flujo de combustible, etc.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIMPIA INYECTORES - DESENGRASANTE AUTOMOTRIZ',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Para que el motor de su  vehículo quede libre de toda suciedad. Ideal para talleres mecánicos, car wash y el hogar.  Para el lavado de motores (carros, motocicletas, camiones, maquinaria, etc.), así como superficies que tengan grasa y/o aceite adherido.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - CENTURY®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Excede especificaciones DOT 4; contiene inhibidores extra para soportar las exigencias del servicio pesado especial con siste-mas de frenos ABS.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - Líquidos de Frenos PRODIN®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'de alto punto de ebullición, estabilidad y acción lubricante; vienen en envases de  polietileno coextruído de dos capas,  que evitan la absorción de la Humedad.  NO CONTIENEN ALCOHOL.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - UNIVERSAL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Excede especificaciones DOT 3 y SAE 70R1/70R3 para líquidos de frenos. LIQUIDO DE FRENOS UNIVERSAL es el del profesional.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - SUPER HEAVY DUTY',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Excede especificaciones DOT 3 y SAE 70R1/70R3 para líquidos de frenos; contiene aditivos inhibidores extra para soportar las exigencias del servicio super pesado.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - UNIVERSAL SUPER PESADO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Excede especificaciones DOT 4 y SAE 70R1/70R3 para líquidos. de frenos.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIQUIDOS DE FRENOS - Los Líquidos de Frenos PRODIN®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Son indicados para sistemas de frenos hidráulicos de autos, camiones, buses, etc.  No corroe ni forma residuos o sedimentos en las piezas de metal; inofensivos  al hule y a las diferentes partes que componen el sistema del frenado.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'RTV SILICONE GASKET MAKER',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Resiste temperaturas extremas. No daña sensores, No corrosivo, Bajo olor. Resiste presiones hasta de 5,000 PSI. Excelente adhesión a metal, plástico y hule. No se inflama (seco). Tiempo de curado capa exterior 3-10 minutos.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'RTV SILICONE GASKET MAKER - NEGRO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Resiste temperaturas desde -53°C hasta 260°C. Para tapaderas de válvulas, aceite y de tiempo, bombas de agua, bases de termostato, tapadera de transmisión, multiplicador de entrada, conecciones eléctricas y alambres.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'RTV SILICONE GASKET MAKER - GRIS',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Resiste temperaturas desde -60°C hasta 320°C. Resistencia química contra aceite, refrigerante, grasa, fluidos de transmisión y otros. Como revestimiento en empaques para un sello confiable.Tapaderas de válvulas, tapaderas de aceite, tapadera de tiempo, bombas de agua, bases de termostato, tapadera de transmisión, multiplicador de entrada.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'RTV SILICONE GASKET MAKER - ROJO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Resiste temperaturas desde 50°C hasta 345°C. Resistencia química contra aceite, refrigerante, grasa, fluidos de transmisión y otros. Excelente adhesión a metal, plástico y hule.  Ideal para tapaderas de válvulas y aceite, bombas de agua, bases de termostato, tapadera de transmisión, escapes de salida. Para hacer empaques en vehículos de primera generación, 1970-1990.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'RTV SILICONE GASKET MAKER - TRANSPARENTE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Resiste temperaturas desde -50°C hasta 345°C. Resistencia química. Adhiere, sella, rellena y aisla. Para pegar y sellar vidrio, metal, cuero, vinil, plástico y hule. Reparar mangueras rajadas, sellar lámparas de carro, alambres eléctricos y ventanas.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PRO 600',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'PRO 600 es una cola blanca para madera, plywood, cartón, telas y otras superficies porosas. Es fácil de aplicar, seca rápido, excelente adhesión, resiste al agua y da un acabado transparente, para una pegada profesional.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PEGAMENTO PARA PVC',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una mezcla de resinas plásticas sintéticas y solventes especiales para pegar tuberías de PVC Y CPVC, de fácil aplicación y excelentes resultados en tuberías de agua fría y/o caliente; su envase garantiza la preservación del producto. Para pegar tuberías, accesorios y láminas de PVC.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ACEITE HANDY OIL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Aceite mineral de uso general, con excelentes propiedades lubricantes y penetrantes; con minio y anticorrosivo. Su envase ergonómico facilita su aplicación. Para lubricar y limpiar todo tipo de piezas y mecanismos tales como:  máquinas de coser y de escribir, bisagras, cerraduras, rodos, herramientas, etc.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIJA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Fabricadas a partir de polvo de vidrio y esmeril sobre papel y lona de la más alta calidad.  Disponibles en todos los calibres para aplicaciones en maderas duras y blandas, aglomerados, metal, plásticos, fibra de vidrio, Etc.  Bridan el acabado ideal previo a la aplicación de pinturas y barnices, así como la porosidad necesaria previo al proceso de encolado.  Indispensables en talleres de carpintería, herrería, mecánica, enderezado y pintura, etc.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PEGAMENTO EPOXI',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Adhesivo a base de resina epóxica, cargas micronizadas, pigmentos y catalizador epóxico; pega materiales diversos; inalterable a bajas temperaturas, no se agrieta, no se envejece, no se deteriora, dimensionalmente estable, no escurre, resistente a esfuerzos de hasta 2 ton/pul. cuadrada; alta resistencia al ataque químico; aislante eléctrico, insoluble en agua, endurece bajo el agua; al endurecer no tiene sabor ni olor, no es tóxico.  Resistente a los ácidos, al calor, grasas, solventes, etc.  EPOXI PRODIN® es el adhesivo más usado del mundo. Para el hogar, el taller, la industria; pega acero, hierro, aluminio, porcelana, vidrio, hule, madera, loza,  textiles, cemento, etc. de fácil aplicación.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 3,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ALCO GEL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un antibacterial para desinfectar manos y superficies. Está elaborado con alcohol al 70% por lo que mata el 99.9 % de virus y bacterias.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'DESINFECT ALL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un limpiador de uso general, antibacterial y antiviral para desinfectar superficies y artículos como teléfonos, pantallas, anteojos, calculadoras, y otros artículos de oficina o casa.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'DESENGRASANTE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Para cocinas, estufas, azulejos, etc. Quita las grasas livianas y saturadas, concentrado de gran rendimiento. Agradable aroma a naranja. No daña sus muebles.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'LIMPIA VIDRIOS',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Para toda superficie cristalina, corta la grasa y elimina el polvo. Para vidrios, espejos, marquesas de cristal, etc. Previene contra el hongo del vidrio causado por la humedad, fácil y práctico de utilizar.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CERA LÍQUIDA ANTIDESLIZANTE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Para limpieza y protección de pisos de cemento, granito, madera y cerámicos. Antideslizante, fácil de aplicar, de gran rendimiento. Con agradable aroma que deja las superficies limpias, enceradas y brillantes.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'NOVIRUS',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un antibacterial para desinfectar manos y superficies. •	Elimina el 99.9% de virus y bacterias.  • Libre de metanol.  •	Formulado con alcohol al 70%.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 2,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'MASILLA PLÁSTICA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'MASILLA PLÀSTICA VISOL® diseñada especialmente para la nivelación de superficies metálicas y plásticos reforzados.  En la aplicación su cremosa y liviana consistencia otorga velocidad y rendimiento, generando alto poder de relleno, excelente adhesión, lijado suave, flexibilidad y compatibilidad con todo tipo de pinturas. Especialmente para trabajos finos en donde se requiere una superficie final libre de poro.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PEGAMENTO RTV FORMADOR DE EMPAQUESPEGAMENTO RTV PRODIN®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un poderoso formador de empaques el cual resiste temperaturas desde -60ºC hasta los 345ºC. Puede ser utilizado en diversos usos dependiendo el color del tubo. Excelente adhesión a metal, plástico y hule.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PEGAMENTO EPOXI',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un poderoso adhesivo a base de resina epóxica, es una soldadura en frío la cual pega diversos materiales resistentes a esfuerzos de hasta 2 ton/pul. cuadrada. Para uso en el taller, hogar e industria.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'COLA BLANCA PARA MADERA PRO 600',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'COLA BLANCA PARA MADERA PRO 600 PRODIN® es ideal para usarse en el taller, la industria, la carpintería y el hogar. Su poderosa fórmula pega madera, cartón, telas y otras superficies porosas, de secado rápido y acabado transparente.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'PEGAMENTO PARA TUBOS C+PVC',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una mezcla de resinas plásticas especiales para pegar tubería de AGUA FRÍA y/o CALIENTE. Para pegar tuberías, accesorios y láminas de PVC. Puede ser utilizado en sistemas húmedos o secos.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'CEMENTO DE CONTACTO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'El cemento de contacto PRODINN es ideal para usarse en el taller, la industria, la carpintería y el hogar.   Es un tipo de pegamento de tipo universal, de color amarillo, que posee una adherencia resistente e instantánea al contacto. Es un adhesivo multiusos que forma una unión permanente y de alto rendimiento en una variedad de superficies. Usos: Es un adhesivo el cual puede ser utilizado para pegar zapatos, pisos vinílicos, melaminas, plywood, tapizado de muebles, madera, materiales de carpintería, plásticos, metal, vidrio, porcelana, cerámica, cuero, goma, fieltro, corcho, tela, cartulina y papel, etc. ',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'ACEITE MULTIUSOS HANDY OIL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Aceite mineral para lubricar y limpiar todo tipo de piezas metálicas, antioxidante. Para uso industrial y en el hogar.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'LIJAS EN PLIEGO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Fabricadas a partir de polvo de fibra de vidrio y esmeril sobre papel y lona. Disponible en todos los calibres, lona, madera y agua. Calibres Disponibles: Lija Madera 36 (LONA), Lija Madera 40 (LONA), Lija Madera 50 (LONA), Lija Madera 60 (LONA), Lija Madera 80 (LONA), Lija Madera 100, Lija Madera 120, Lija Madera 180, Lija Madera 220, Lija Madera 240, Lija Madera 320, Lija Madera 400, Lija Madera 600, Lija Madera 800, Lija Madera 1000, Lija de Agua 80, Lija de Agua 100, Lija de Agua 120, Lija de Agua 180, Lija de Agua 220, Lija de Agua 240, Lija de Agua 320, Lija de Agua 400, Lija de Agua 500, Lija de Agua 600, Lija de Agua 800, Lija de Agua 1000, Lija de Agua 1200, Lija de Agua 1500.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'DISCOS DE CORTE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => '(grueso/ delgado):DISCO DE ACERO PLANO 4.5” x 1/25, 10 U/C, DISCO DE ACERO PLANO 7” x 1/16, 10 U/C, DISCO DE ACERO PLANO 4.5 x 1/8, 10 U/C, DISCO DE ACERO PLANO  7” x 1/8, 5 U/C, DISCO DE METAL PLANO 4.5” X 1/25, 10 U/C, DISCO DE METAL PLANO 7” X 1/16, 10 U/C, DISCO DE METAL PLANO 4.5” X 1/8, 10 U/C, DISCO DE METAL PLANO 7” X 1/8	, 5 U/C, DISCO DE CONCRETO 4.5” X 1/25, 10 U/C, DISCO DE CONCRETO 7” X 1/16, 10 U/C, DISCO DE CONCRETO 4.5” X 1/8, 10 U/C.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'SOLVENTE MINERAL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Diluyente de barnices y pinturas, limpieza general de instalaciones de maquinaria, removedor de manchas en el piso, diluir pinturas de aceite, limpiar brochas, rodillos y otros implementos utilizados al pintar con pintura de aceite. En la industria textil, como solvente para secantes, desengrasantes de metales. En la preparación de pulidores o betún para muebles, zapatos, solvente de limpieza en seco.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'THINNER',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Diluyente de barnices y pinturas, removedor de manchas en el piso, ideal para limpieza de instrumentos de pintura de aceite. En la industria textil, funciona como solvente para secantes, desengrasantes de metales. Se emplea para diluir sustancias insolubles en agua, como la pintura, los aceites y las grasas.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'ÁCIDO MURIÁTICO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Funciona muy bien en el aseo de azulejos, porcelana, ladrillos y baños, sobre todo en inodoros; eliminando el sarro y manchas difíciles. Por ser extremadamente fuerte, se recomienda diluir 3/4 de ácido en 1/4 de agua. No es aconsejable usarlo para la limpieza de tuberías, debido a su acción corrosiva, a menos que se trate de tubos PVC.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'SODA CÁUSTICA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Solución eficaz para desbloquear desagües, tuberías de cocina y baños, entre otros. Se recomienda utilizar guantes, lentes y mascarilla. Puede causar quemaduras químicas sino se manipula con precaución.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'SUPER GLUE - (CIANOCRILATO ADHESIVO)',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Acción rápida y super fuerte, pega cerámica, madera, plástico, metal, vidrio, hule y porcelana. Las superficies deben estar lisas, limpias y secas. Aplicar sobre una de las superficies únicamente, junte las dos superficies y aplique presión ligera por 10 segundos o hasta que haya pegado. Para uso en el hogar y la oficina.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CINTA DE SELLADO PTFE',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una película fina hecha a base de un polímero de flúor. Esta cinta se adhiere alrededor de las roscas de una tubería, ya sea que conduzca agua, gas u oxígeno, antes de ser atornilladas en su lugar. Su aplicación adecuada evita fugas pues impide el deterioro de las tuberías por la acción de enroscar o desenroscar y sirve de barrera anti oxidación, por lo que su uso es casi obligatorio.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'CINTA DE AISLAR',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => '•	No inflamable, •	Alta resistencia al calor, •	Hasta 600V 80° C',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 4,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'BETÚN EN PASTABETÚN EN PASTA SHINOLA PLUS®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una cera natural en pasta la cual protege y restaura el calzado. Disponible en color negro, café y neutro.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 5,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'BETÚN LÍQUIDO SHINOLA PLUS®',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una cera líquida natural la cual protege y restaura el calzado. Disponible en color negro, café y neutro. Con el sistema novedoso de su esponja triangular evita derrames, desperdicios y es más fácil de aplicar.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 5,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'TENNIS SHAMPOO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Para lona, gamuza, cuero, nylon y vinil. Listo para usar. Con aplicador especial: •	Limpia, •	Protege, •	Desodoriza, •	Desinfecta, •	Anti - hongos. INSTRUCCIONES DE USO: •	Agite antes de destapar. •	Asegúrese que el cepillo esté completamente húmedo en todo momento. •	Aplique suavemente. •	Elimine residuos con un trapo limpio y húmedo •	Deje secar. •	Lave el aplicador después de usar y tape el producto.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 5,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'CERAS EN PASTA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Ceras para lustrar y limpiar pinturas de cualquier vehículo. Están hechas a base de ceras, resinas, limpiadores, solventes y silicones; son fáciles de aplicar y de gran rendimiento. Con Protector de Rayos Ultravioleta (UV). Cera Visol Amarilla Original: Aplicar una vez cada 30días. Cera Visol Azul Presuavizada: Recomendado aplicar una vez cada 15 días.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CERA PURA AERO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Cera suavizada para lustrar acabados de pintura acrílica y sintética. Fácil aplicación ideal para proteger y dar brillo a automóviles, muebles de madera, azulejos y fibra de vidrio. Protege contra agua, sol, rayones y polvo.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'CERA LÍQUIDA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Cera para lustrar y limpiar pinturas de cualquier vehículo.  Elaboradas a base de ceras, resinas, limpiadores, solventes y silicones; son fáciles de aplicar y de gran rendimiento. Con Protector de Rayos Ultravioleta. Fácil de aplicar, fácil de quitar. Puede aplicarse cada semana o cada 15 días.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PASTA PARA PULIR ROJO GRUESO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Fácil de aplicar por su consistencia cremosa. Para pulir y revivir acabados de pintura con rayones y/u opacada por el sol. Se recomienda dar dos manos de pulimiento al trabajo.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PASTA PARA PULIRBLANCO FINO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Pastas para pulir y dar el MEJOR ACABADO a superficies pintadas a base de laca o sintéticos.  Fácil de aplicar por su consistencia cremosa. Para dar acabado a trabajos de pintura automotriz.  De múltiples usos en el hogar, limpia desde electrodomésticos, azulejos, pisos cerámicos, etc.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PASTA PARA PULIR BLANCO FINO H2O',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Remueve irregularidades o rayones en la superficie de la pintura nueva, también puede utilizarse como un paso intermedio en el acabado de la pintura o para corregir maltrato en la pintura existente.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ], 
            [
                'name' => 'PASTA PARA PULIR ROJO GRUESO H2O',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Remueve irregularidades o rayones en la superficie de la pintura nueva y puede utilizarse como un paso intermedio en el acabado de la pintura o por maltrato en la pintura ya existente.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'PULIDOR LIQUIDO BLANCO EXTRAFINO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un pulidor extra fino que da como resultado un acabado final y brillante a la pintura de su automóvil, resaltando el color. No contiene silicones ni otros componentes que tapen el poro de la misma.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'VINIL GUARD',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Da brillo y protección contra los Rayos Ultravioleta (UV) del sol a artículos elaborados en vinil, cuerina u otros materiales plásticos o de hule. Ideal para el interior y exterior del automóvil (tapicería, tableros de automóviles, piezas plásticas y de hule)',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'VINIL GUARD GEL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Posee excelente estabilidad ante la temperatura y las inclemencias del tiempo, da brillo y protección contra los Rayos Ultravioleta (UV) del sol a artículos elaborados en vinil, cuerina u otros materiales plásticos o hule. Ideal para el interior y exterior del automóvil.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'CAR SHAMPOO',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Devuelve el brillo en pinturas, metales, vidrios y otros; limpia, remueve y disuelve rápidamente la suciedad, smog e impurezas que se adhieren a todas las superficies del vehículo, sin dañar la pintura, el transparente, partes plásticas, de hule y metal.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'ABRILLANTADOR DE LLANTAS GEL',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es un producto que se aplica directamente en la superficie de la llanta u otra superficie de hule exterior. Si salpica, no daña otras partes del vehículo como pintura, faldones, aros, etc.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'WASH´N WAX',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Lava, abrillantar y proteger su vehículo, tres pasos una sola actividad, ahorrando tiempo y esfuerzo. No es necesario aplicar y lustrar con otro tipo de cera para que el vehículo quede brillante y protegido contra lluvia ácida, polvo, rayos UV y otros.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'REMOVEDOR MANCHAS DE AGUA',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Formulado para remover las manchas provocadas por agua dura, la cual contiene altos niveles de minerales disueltos como calcio, magnesio, y otras impurezas del medio ambiente.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'WINDOW CLEANER',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Es una fórmula especial para dejar los vidrios limpios y desempañados. Para cualquier superficie cristalina, tanto del automóvil como del hogar.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
            [
                'name' => 'DESENGRASANTE AUTOMOTRIZ',
                'url_products' => "", // Valor nulo para 'url_products'
                'description' => 'Removedor de grasa y suciedad para el motor de su vehículo. Ideal para talleres mecánicos, car wash e incluso el hogar.  Para el lavado de motores (carros,motocicletas, camiones,maquinaria, etc.), así como superficies que tengan grasa y/o aceite adherido.',
                'price' => "", // Valor nulo para 'price'
                'category_id' => 6,
                'line_id' => "", // Valor nulo para 'line_id'
                'popular' => false, // Valor predeterminado para 'popular'
            ],
        ]);
    }
}

