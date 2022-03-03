<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publicaciones')->insert([
            [
                'TITULO'=>'Sistemas de información.',
                'DESCRIPCION' => 'Reconocer los conceptos de sistemas de información.',
                'ARTICULO1'=> 'Los sistemas de información (SI) se refieren a un conjunto de mecanismos estructurados diseñados para administrar datos e información para que puedan ser accedidos y procesados de manera fácil y rápida.',
                'ARTICULO2'=> 'Cada sistema de información consta de una serie de recursos interrelacionados que interactúan y que se organizan de la forma más conveniente para el propósito de información previsto, como la recopilación de datos personales, el procesamiento de datos, etc., las estadísticas, la disposición de documentos, etc.',
                'ARTICULO3'=> 'Cabe señalar que el sistema de información es diferente al sistema informático, aunque este último suele ocupar la mayor parte de los recursos de la IA. Pero hay muchos otros enfoques de los sistemas de información que no están necesariamente basados en computadoras.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://cibertareas.info/wp-content/uploads/2013/08/sistemas-de-informacion.png',
                'UNIDAD' => '1',
                'slug' => 'sistemas_de_informacion',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Evolucion de los Sistemas de información.',
                'DESCRIPCION' => 'Reconocer la evolucion de los sistemas de informacion',
                'ARTICULO1'=> '1950 - 1960: Sistema de procesamiento electrónico de datos, procesamiento de transacciones
                                Durante este período, la función del sistema de TI consistía principalmente en realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. La IA se utiliza principalmente para el procesamiento electrónico de datos.
                                EDP se describe como el uso de computadoras para registrar, clasificar, manipular y resumir datos. También conocido como procesamiento de información o procesamiento automático de datos.
                                El sistema de procesamiento de transacciones (TPS) fue el primer sistema informático desarrollado para procesar datos comerciales. El TPS está dirigido principalmente al personal administrativo de la organización. TPS inicialmente usa datos masivos recopilados durante un período de tiempo y luego procesa todas las transacciones.',
                'ARTICULO2'=> '1960-1970: Sistemas de información gerencial
                                Durante esta era, el papel de IS evolucionó de TPS a Sistemas de información de gestión (MSI). MSI transforma los datos en informes informativos útiles y brinda a los gerentes las herramientas para organizar, evaluar y administrar de manera efectiva los departamentos dentro de la organización. MSI proporciona información en forma de pantallas e informes predefinidos para respaldar las decisiones comerciales. Algunos ejemplos del desempeño de MSI incluyen el sistema de informes de tendencias de costos, análisis de ventas y eficiencia de producción.',
                'ARTICULO3'=> '1970-1980: Sistemas de apoyo a la decisión
                                Un gran paso adelante en esta era fue la introducción de la computadora personal (PC). Con la llegada de las PC, el poder de cómputo o computación se ha distribuido en toda la organización. Las funciones de SI están estrechamente relacionadas con la gestión, no con el enfoque técnico en la organización. El artículo se centra en los "sistemas informáticos interactivos" diseñados para ayudar a los responsables de la toma de decisiones a resolver problemas. 1980-1990: Despliegue de sistemas de información',
                'ARTICULO4'=> '1990-2000: Sistema de gestión del conocimiento
                                En la actualidad, la rápida expansión de las redes internas, las redes periféricas, Internet y otras redes globales interconectadas ha cambiado drásticamente la oportunidad comercial de IS. El conocimiento se puede difundir por todo el mundo independientemente del tiempo y el espacio.',
                'ARTICULO5'=> '2000-presente: comercio electrónico
                                Internet y las tecnologías y aplicaciones relacionadas han cambiado la forma en que operan las empresas y la forma en que trabajan las personas. Las funciones de los sistemas de TI en este período se mantuvieron igual que hace 50 años: mantenimiento de registros, gestión de informes, procesamiento de transacciones, soporte de procesos organizativos y de gestión. Se utiliza para respaldar los procesos comerciales, la toma de decisiones y la ventaja competitiva.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://todotecnologias.com/wp-content/uploads/2021/02/9-2.png',
                'UNIDAD' => '1',
                'slug' => 'evolucion_de_los_sistemas_de_informacion',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Cliente-Servidor',
                'DESCRIPCION' => 'Conocer los conceptos de cliente-servidor',
                'ARTICULO1'=> 'Por tanto, el concepto de cliente-servidor hace referencia a un modelo de comunicación que conecta diferentes dispositivos informáticos en una red. En este marco, el cliente dirige las solicitudes de servicio al servidor y el servidor es responsable de cumplir con estas solicitudes.',
                'ARTICULO2'=> 'Con esta arquitectura, las tareas se segregan entre el servidor (que proporciona el servicio) y el cliente (que solicita el servicio). En otras palabras, el cliente le pide al servidor que proporcione un recurso y el servidor envía la respuesta.',
                'ARTICULO3'=> 'Este tipo de modelo permite compartir la potencia informática. Un servidor puede ejecutarse en muchas computadoras y puede tener muchos programas. Dependiendo de los servicios que brinde, puede llamarse servidor web, servidor de correo u otra cosa.',
                'ARTICULO4'=> 'Por ejemplo, a pesar de que el correo electrónico parezca una “aplicación” muy liviana y sencilla, los servidores deben almacenar volúmenes colosales de datos para satisfacer a todos sus clientes, y, por consiguiente, realizar búsquedas y consultas muy demandantes para responder a todas sus solicitudes. Cuando buscamos un término en nuestra casilla para dar con un mensaje en particular, el servidor debe revisar cientos o miles de archivos, y lo hace en una fracción de segundo, algo que sería imposible en nuestros hogares.',
                'ARTICULO5'=> 'Los sistemas de streaming de videojuegos para usarlos a distancia son otro ejemplo, en este caso mucho más exigente que el correo electrónico, ya que el cliente puede disfrutar de un programa de última generación en tiempo real con un ordenador que simplemente le permita recibir el vídeo de forma fluida y enviar los eventos de su mando, teclado y ratón.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'http://emantys.com/wp-content/uploads/modelo-cliente-servidor.jpg',
                'UNIDAD' => '1',
                'slug' => 'cliente_servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Sistemas de computadoras centrales y dedicadas',
                'DESCRIPCION' => 'Conocer las computadoras centrales y dedicadas',
                'ARTICULO1'=> 'Computadora grande También conocida como mainframe, es una computadora central costosa, eficiente y utilizada principalmente por grandes empresas para procesar grandes cantidades de datos, como para procesar transacciones bancarias.',
                'ARTICULO2'=> 'Administrar y operar grandes redes y bases de datos dinámicas y remotas y servidores de aplicaciones web. ',
                'ARTICULO3'=> 'Investigación de nivel bajo e intermedio, así como algún aislamiento de nivel superior, como la simulación del comportamiento de la sustancia X en presencia de la sustancia Y, el desarrollo de nuevos fármacos y productos químicos. ',
                'ARTICULO4'=> 'Las animaciones meteorológicas y las posibles consecuencias en determinadas situaciones están permitidas en la estación meteorológica. ',
                'ARTICULO5'=> 'En ingeniería civil, desarrollar planos y modelos de construcción más eficientes, como edificios resistentes a huracanes, tornados y terremotos, al tiempo que se aprovecha mejor el entorno, como el espacio, la iluminación, el aire acondicionado, el aire natural, etc.',
                'ARTICULO6'=> 'Computadora dedicada. son aquellas que nunca se apagan, es decir, nunca se desconectan de Internet, optimizadas para sus funciones, que utilizan todo su poder para administrar sus recursos.network geek, es decir, sirviendo a los clientes para procesar solicitudes Época Computadoras Dedicadas Cada servicio usa su propia computadora, para que los usuarios del servicio puedan conectarse directamente. Esto se debe a la llegada de computadoras que son pequeñas, fáciles de usar, más económicas y potentes que las computadoras tradicionales.',
                'IMAGEN' => 'https://concepto.de/wp-content/uploads/2018/09/computadora-mainframe-e1591236289309.jpg',
                'UNIDAD' => '1',
                'slug' => 'sistemas_de_computadoras_centrales_y_dedicadas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Sistemas de conexión libre y a través de redes',
                'DESCRIPCION' => 'Definir los sistemas de conexión libre y a través de redes.',
                'ARTICULO1'=> 'Conexión libre',
                'ARTICULO2'=> 'Han pasado más de 10 años desde la introducción del escritorio a gran escala. Esto permite que la mayoría de las cargas de trabajo computacional en dominios de presentación y computación se ejecuten desde la computadora del usuario. En muchos casos, los usuarios obtienen la información que necesitan de una computadora de servicio. Estos escritorios se conectan a la computadora de servicio con un software que les permite emular algún tipo de terminal. En otros casos, la información les es proporcionada por fuentes magnéticas o por transcripción. ',
                'ARTICULO3'=> 'Computadoras en la web',
                'ARTICULO4'=> 'Es una era basada en el concepto de red informática, donde la información reside en una o más computadoras, los usuarios de esa información trabajan con la computadora y todas las computadoras están conectadas entre sí. Esto brinda la posibilidad de que todos los usuarios puedan acceder a la información de todas las computadoras y simultáneamente intercambiar información entre diferentes sistemas.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://blog.desdelinux.net/wp-content/uploads/2012/04/NX_network1.png',
                'UNIDAD' => '1',
                'slug' => 'sistemas_de_conexión_libre_y_a_través_de_redes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Sistemas con arquitectura  Cliente/Servidor',
                'DESCRIPCION' => 'Describir los sistemas con arquitectura  Cliente/Servidor .',
                'ARTICULO1'=> 'Esta arquitectura consiste básicamente en que un cliente envía una solicitud a otro programa (servidor) como respuesta. Aunque esta idea se puede aplicar a programas que se ejecutan en una sola computadora, es más beneficiosa en sistemas operativos multiusuario distribuidos en una red de computadoras. La interacción cliente-servidor es la base de la mayoría de las comunicaciones de red. Ayuda a comprender los conceptos básicos de la construcción de algoritmos distribuidos. ',
                'ARTICULO2'=> 'Cliente: un ejecutable que participa activamente en el establecimiento de una conexión. Enviar solicitud al servidor y esperar respuesta. Una vez atendida la solicitud, se limita su vida y finaliza el trabajo. ',
                'ARTICULO3'=> 'Servidor: Este es un programa que brinda servicios que se pueden obtener a través de la red. Acepta solicitudes de la red, ejecuta el servicio y devuelve los resultados al solicitante. Dado que se puede implementar como una aplicación de software, se puede ejecutar en cualquier sistema con TCP/IP y se puede ejecutar con otras aplicaciones. El servidor inicia la ejecución antes de interactuar con el cliente. Su vida útil o tiempo de interacción es "interminable". El servidor puede realizar tareas simples (para un servidor por hora que devuelve una respuesta) o tareas complejas (para un servidor ftp que debe realizar una acción antes de devolver una respuesta).',
                'ARTICULO4'=> ' Los servidores simplemente procesan las solicitudes de una en una (secuencial o interactivamente), por lo que no verifican otra solicitud antes de responder a la anterior. El modo más complejo maneja solicitudes concurrentes, incluso si lleva mucho tiempo procesar una sola solicitud (en caso de que el servidor ftp necesite copiar archivos a otra máquina). Son complejos porque tienen altos requisitos de seguridad y autorización. Pueden leer archivos del sistema, permanecer en línea y acceder a datos y archivos de usuario protegidos. No pueden responder ciegamente a las solicitudes de los clientes, deben hacer cumplir las políticas de seguridad y acceso al sistema. ',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.monografias.com/docs114/telecomunicaciones-arquitectura-cliente-servidor/image001.jpg',
                'UNIDAD' => '1',
                'slug' => 'sistemas_con_arquitectura_Cliente_Servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Protocolos de comunicación en red.',
                'DESCRIPCION' => 'Reconocer protocolos de comunicación en red.',
                'ARTICULO1'=> 'Un protocolo es un conjunto de reglas: un protocolo de red es un estándar y una política formal que incluye restricciones, procedimientos y formatos que definen el intercambio de paquetes de información para permitir la comunicación entre dos máquinas, un host o varios dispositivos en una red.',
                'ARTICULO2'=> 'Los protocolos de red incluyen mecanismos que permiten que los dispositivos se identifiquen y se conecten entre sí, así como reglas de formato que rigen cómo se forman los paquetes y los datos en los mensajes enviados y recibidos. Varios protocolos admiten la validación de mensajes y la compresión de datos diseñados para una comunicación de red confiable y de alto rendimiento.',
                'ARTICULO3'=> '',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://ccnadesdecero.es/wp-content/uploads/2017/11/Ejemplo-protocolos-TCP-IP.png',
                'UNIDAD' => '1',
                'slug' => 'protocolos_de_comunicación_en_red',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Sistemas de información de acuerdo a su arquitectura.',
                'DESCRIPCION' => 'Clasificar los sistemas de información de acuerdo a su arquitectura.',
                'ARTICULO1'=> 'Sistema de dos niveles: archivo-servidor. La funcionalidad del servidor en este caso suele estar limitada por el almacenamiento de datos (que también puede almacenar los archivos ejecutables) y el procesamiento de datos se realiza solo en el lado del cliente. El número de clientes está limitado porque no hay acceso simultáneo a los archivos de registro. Las principales desventajas de tales sistemas son: falta de garantías de integridad de la base de datos, bajo nivel de protección y bajo rendimiento del sistema. ',
                'ARTICULO2'=> 'Sistema de dos niveles: cliente-servidor, todos los cálculos se realizan en el servidor bajo la protección del sistema operativo del servidor mediante un sistema de gestión de base de datos. Las principales desventajas de este tipo son la falta de velocidad y la incapacidad de realizar algoritmos computacionales complejos. En este punto también se deben tomar algunas decisiones, aunque utilizando la herramienta cliente-servidor el sistema en realidad actúa como un servidor de archivos, con todas las consecuencias negativas. Tales decisiones a menudo se toman debido a la dificultad de implementar algoritmos computacionales complejos y transferir el cálculo a la estación de trabajo del cliente usando el sistema de administración de la base de datos del servidor. ',
                'ARTICULO3'=> 'Un sistema de varios niveles en el que las funciones de procesamiento de datos se proporcionan a uno o más servidores dedicados, lo que permite la partición de las funciones de almacenamiento, procesamiento y presentación de datos para un uso más eficiente. En esta etapa, la implementación de dicha clase es más adecuada para implementar la funcionalidad deseada.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://image.slidesharecdn.com/01arquitecturadelossistemasdeinformacion-100109140440-phpapp02/95/01-arquitectura-de-los-sistemas-de-informacion-3-728.jpg?cb=1263045891',
                'UNIDAD' => '1',
                'slug' => 'sistemas_de_información_de_acuerdo_a_su_arquitectura',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Diagramación de componentes de la arquitectura  Cliente/Servidor .',
                'DESCRIPCION' => 'Explicar el proceso de diagramación de componentes de la arquitectura  Cliente/Servidor .',
                'ARTICULO1'=> 'El primer nivel responsable de la presentación e interacción del usuario está en los componentes de primer nivel. Estos componentes del lado del cliente permiten a los usuarios interactuar con procesos adicionales de forma segura e intuitiva. El servidor de aplicaciones de WebSphere da soporte a diferentes tipos de clientes. Los clientes no tienen acceso directo a los servicios terciarios. Por ejemplo, un componente de cliente proporciona un formulario en el que un cliente puede solicitar un producto. El componente del cliente envía este pedido a un proceso de segundo nivel que verifica la base de datos del producto y realiza las tareas necesarias para la facturación y el envío.',
                'ARTICULO2'=> 'El segundo nivel de procesos a menudo se denomina capa lógica de aplicación. Estos procesos gestionan la lógica de negocio de la aplicación y tienen acceso a servicios terciarios. La mayor parte del procesamiento tiene lugar en la capa lógica de la aplicación. Múltiples componentes de cliente pueden acceder al proceso de ayuda al mismo tiempo, por lo que esta capa de lógica de aplicación tiene que manejar sus propias transacciones. ',
                'ARTICULO3'=> 'Los servicios de capa 3 están protegidos contra el acceso directo de los componentes del cliente a través de una red segura. La interacción debe tener lugar como parte de un proceso de segundo nivel. [z/OS] La ventaja de Z/OS es la capacidad de reunir la segunda y la tercera capa en el entorno físico de Z/OS, al mismo tiempo que se mantienen los beneficios lógicos y de seguridad de un sistema en capas especializado.',
                'ARTICULO4'=> 'Los tres niveles necesitan comunicarse entre sí. Los protocolos estándar abiertos y las API expuestas simplifican esta comunicación. Los componentes del cliente se pueden escribir en cualquier lenguaje de programación, como Java™ o C++. Estos clientes se ejecutan en cualquier sistema operativo y se comunican con la capa lógica de la aplicación. Las bases de datos de capa 3 pueden tener cualquier diseño siempre que la capa de aplicación pueda consultarlas y manipularlas. La clave de esta arquitectura es la capa lógica de la aplicación.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.ibm.com/docs/es/SSAW57_9.0.5/com.ibm.websphere.nd.multiplatform.doc/ae/images/thtrcs.gif',
                'UNIDAD' => '1',
                'slug' => 'diagramación_de_componentes_de_la_arquitectura_Cliente_Servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Componentes del modelo  Cliente/Servidor.',
                'DESCRIPCION' => 'Reconocer los componentes del modelo  Cliente/Servidor.',
                'ARTICULO1'=> 'Cliente: Es uno de los elementos más importantes de todo el sistema. Le permite iniciar el proceso y llevar a cabo toda la información solicitada. Este proceso identifica al cliente frente al suscriptor del servicio. Una aplicación de estilo calculadora está representada por una computadora. Este cliente siempre solicita datos de la red referentes a algún servicio.',
                'ARTICULO2'=> 'Internet: En este caso, la red está representada por una colección de diferentes clientes, servidores y bases de datos que, al conectarse, forman un grupo sólido y definido. En el caso de Internet, el sistema requiere protocolos específicos para datos de clientes o entrada de procesos.',
                'ARTICULO3'=> 'Servidor: Hemos visto esta característica y su importancia en el servidor. Por lo tanto, poder acceder a los recursos necesarios es una necesidad. Un servidor es un proveedor de servicios que puede estar compuesto por hardware o recursos físicos específicos. Tiene la capacidad de recibir, procesar y enviar los recursos solicitados por el cliente.',
                'ARTICULO4'=> 'Protocolo: Se considera un conjunto de reglas y procedimientos estandarizados que simplifican el flujo de información en un sistema de red. Sin este protocolo, las conexiones no serán buenas y los clientes pueden experimentar retrasos en su proceso. El protocolo ayuda a agilizar el transporte transportando eficientemente los recursos a su destino.',
                'ARTICULO5'=> 'Los servicios: En el modelo cliente-servidor, representa una colección de datos e información que trata de satisfacer las diferentes necesidades del cliente. Los servicios pueden ser de cualquier tipo. Estos servicios son necesarios para todo, desde el correo electrónico hasta los videos musicales. En definitiva, la red debe proporcionar al cliente todos los recursos.',
                'ARTICULO6'=> 'Base de datos: Al igual que otros sistemas de archivos o redes, las bases de datos son grupos distintos de información a los que se puede acceder fácilmente.
                                Siempre está ordenado y categorizado en la web. También sirve como instalación de depósito y almacenamiento de materias primas. Estas son páginas donde los clientes pueden reservar diferentes recursos en función de su relación con la información de la campaña.',
                'IMAGEN' => 'https://www.ibm.com/docs/es/SSAW57_9.0.5/com.ibm.websphere.nd.multiplatform.doc/ae/images/thtrcs.gif',
                'UNIDAD' => '1',
                'slug' => 'componentes_del_modelo_Cliente_Servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Concepto de programa maestro y procesos y tareas del programa maestro',
                'DESCRIPCION' => 'Definir concepto de programa maestro y procesos y tareas del programa maestro',
                'ARTICULO1'=> 'El modo más complejo maneja solicitudes concurrentes, incluso si lleva mucho tiempo procesar una sola solicitud (en caso de que el servidor ftp necesite copiar archivos a otra máquina). Son complejos porque tienen altos requisitos de seguridad y autorización. Pueden leer archivos del sistema, permanecer en línea y acceder a datos y archivos de usuario protegidos. No pueden responder ciegamente a las solicitudes de los clientes, deben hacer cumplir las políticas de seguridad y acceso al sistema. El servidor suele constar de dos partes:
                                Programa o proceso responsable de aceptar nuevas solicitudes: Maestro o Padre. 
                                El programa o proceso debe manejar una sola solicitud: Esclavos o hijos.',
                'ARTICULO2'=> 'Tareas del programa maestro',
                'ARTICULO3'=> 'Abrir un puerto local bien conocido al cual pueda acceder los clientes.',
                'ARTICULO4'=> 'Esperar las peticiones de los clientes.',
                'ARTICULO5'=> 'Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).',
                'ARTICULO6'=> 'Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).
                                Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.',
                'IMAGEN' => 'https://www.ecured.cu/images/5/51/Cliente_Servidor.JPG',
                'UNIDAD' => '1',
                'slug' => 'concepto_de_programa_maestro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Tipos de servidores',
                'DESCRIPCION' => 'Describir los tipos de servidores',
                'ARTICULO1'=> '1. Servidor de correo electrónico
                                    Uno de los más antiguos que pudimos encontrar en esta lista. Actúa como una especie de oficina de correos que almacena, recibe, envía y permite realizar muchas operaciones relacionadas con la correspondencia personal de los clientes.
                                    Están programados para responder eficientemente a las solicitudes de los clientes por el tipo de correo que reciben o envían. Además, tienen los siguientes subtipos:
                
                                    POP3: almacenan los correos electrónicos entrantes hasta que son abiertos por el usuario y luego se envían al dispositivo (computadora, teléfono, tableta). IMAP: le permite interactuar con la información recibida como correo electrónico sin descargarla a su computadora. Gracias a ellos, las vistas previas se pueden ordenar, descargar o eliminar. SMTP: administra todos los correos electrónicos salientes. Utilizan una combinación de POP3 e IMAP. El servidor de correo es uno de los más populares del mercado gracias al predominio del correo electrónico en nuestras vidas por su eficacia en cuanto a información y gestión. 
                                    2. servidor web
                                    Según El Tiempo, casi 28 años después de Internet, existen más de 1.700 millones de sitios web, cada uno de los cuales debe estar alojado en un servidor.
                                    El servidor web es responsable de almacenar la información del sitio web en formato HTML, incluidos texto, imágenes, videos y varios datos. Mediante el uso de un navegador web, los usuarios pueden verlo todo en su pantalla.',
                'ARTICULO2'=> '3. Servidor de base de datos
                                    Son dispositivos diseñados para almacenar grandes cantidades de información y gestionarla una a una.
                                    También pueden analizar, manipular y almacenar datos de acuerdo con los requisitos del usuario.
                                    4. Servidor en la nube/cloud
                                    Son utilizados por empresas que solo alquilan espacio en sus servidores a personas o empresas para almacenar información de forma remota. Se utilizan para almacenar grandes cantidades de datos, protegiendo así la información de una organización o individuo.
                                    A menudo se utiliza para la "seguridad" de la información, porque además del acceso inmediato, el proveedor garantiza la protección de los datos contra pérdidas o fugas.',
                'ARTICULO3'=> '5. Servidor DNS
                                    Se encargan de la gestión de los dominios de Internet. Es decir, su trabajo es crear un vínculo entre el dominio de un sitio web y su dirección IP, un conjunto de números que define la jerarquía y la lógica de la interfaz de red de un dispositivo. De esta manera, después de ingresar el nombre de dominio en el navegador, el servidor leerá la solicitud y devolverá información sobre la apariencia de la página.
                                    6. Servidor Telnet
                                    Utilizado principalmente en telecomunicaciones, es un protocolo de red que permite a los usuarios administrar, enviar y recibir datos para resolver problemas de red relacionados con la telefonía.
                                    Asimismo, almacena mensajes de voz, datos de contestadores automáticos y controla el internet móvil fuera de las llamadas.',
                'ARTICULO4'=> '7. servidor de SIP
                                    Esto se llama proxy SIP y su trabajo es hacer conexiones para llamadas telefónicas a través de Internet. No transmite audio ni video, solo almacena direcciones IP para comunicarse con otros usuarios.
                                    8. Servidor FTP
                                    Es un servidor conectado a Internet que permite transferir archivos y datos entre otros ordenadores y servidores.',
                'ARTICULO5'=> '9. Servidor de acceso remoto (RAS)
                                    Supervise la línea de módem de una computadora u otros medios de comunicación por Internet para solicitar conexiones de red de forma remota, responder llamadas e intervenir con solicitudes de la red.
                                    10. Servidor compartido
                                    Proporcionan espacio para almacenar información al compartir recursos con RAM, CPU, sistema operativo, conexión a Internet y dirección IP.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.areatecnologia.com/informatica/imagenes/tipos-de-servidores.jpg',
                'UNIDAD' => '1',
                'slug' => 'tipos_de_servidores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                //modificar
                'TITULO'=>'Características de la arquitectura Cliente/Servidor',
                'DESCRIPCION' => 'Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.',
                'ARTICULO1'=> 'Es la mezcla de un cliente que interactúa con un usuario y un servidor que a su vez interactúa con recursos compartidos. El desarrollo del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como un motor de software que administra recursos compartidos como bases de datos, routers, impresoras, módems, etc.
                Las tareas del cliente y del servidor tienen diferentes requisitos para los recursos informáticos, como la velocidad del procesador, la memoria, la velocidad y la capacidad del disco y los dispositivos de entrada y salida.',
                'ARTICULO2'=> 'Se establece una relación entre diferentes procesos, que pueden ejecutarse en una misma máquina o en diferentes máquinas distribuidas por la red. 
                Partiendo del concepto de “servicio”, se establece una clara distinción funcional entre cliente y servidor.
                La relación que se establece puede ser de muchos a uno, donde un servidor puede atender a muchos clientes, regulando su acceso a los recursos compartidos. 
                Los clientes corresponden a procesos activos porque son los procesos que realizan las solicitudes de servicio al servidor. Este último tiene una naturaleza pasiva mientras espera las solicitudes de los clientes.',
                'ARTICULO3'=> 'No existe relación entre un cliente y un servidor más que la que se establece a través del intercambio de mensajes entre ellos. Los mensajes son el mecanismo para solicitar y entregar solicitudes de servicio.
                El entorno es heterogéneo. La plataforma de hardware y el sistema operativo del cliente y del servidor no siempre son los mismos. En concreto, una de las principales ventajas de esta arquitectura es que se pueden conectar clientes y servidores independientemente de sus plataformas. ',
                'ARTICULO4'=> 'El concepto de escalabilidad horizontal y vertical se aplica a cualquier sistema cliente/servidor. La escalabilidad horizontal le permite agregar más estaciones de trabajo activas sin afectar significativamente el rendimiento. La escalabilidad vertical le permite actualizar las capacidades del servidor o agregar varios servidores.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://img-17.ccm2.net/GEc-LgUnfu5USOLBwZlXqlJU3Yc=/500x/acd126620da84695ac21810d948e8620/ccm-encyclopedia/Cliente_servidor.jpg',
                'UNIDAD' => '1',
                'slug' => 'caracteristicas_cliente_servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Ventajas y desventajas de Cliente/Servidor',
                'DESCRIPCION' => 'Identificar las ventajas y desventajas de la arquitectura Cliente/Servidor.',
                'ARTICULO1'=> 'Ventajas
                Seguridad: Básicamente, todo el acceso a las tablas de FoxPro se realiza a través de la red del sistema operativo, por lo que los usuarios deben poder acceder al directorio que contiene las tablas de VFP. Cualquiera que tenga acceso a estos formularios puede eventualmente descubrir cómo leerlos. También es sencillo usar un controlador ODBC y Excel, o si necesitan usar un editor hexadecimal para descifrar su esquema de cifrado. Muchos sistemas cliente-servidor pueden eliminar esta amenaza mientras restringen el acceso del cliente a la interfaz del servidor en lugar de a todos los datos. Si está tratando con material altamente confidencial, cliente-servidor tiene sentido por razones de seguridad.',
                'ARTICULO2'=> 'Tamaño de datos: como todas las variantes de xBase, está limitado a 2 GB en cualquiera de sus tablas o archivos. Este límite está relacionado con la forma en que se realiza el bloqueo en un solo registro y, aunque es ciertamente posible alcanzar este límite, esto es diferente de lo que suele hacer Microsoft. Si bien existen muchas soluciones para estas limitaciones, agregan desafíos a Visual FoxPro a medida que las tablas se hacen más grandes; por ejemplo, la reindexación lleva mucho tiempo en caso de corrupción. En resumen, si el tamaño se convierte en un factor más importante, considere si usar Cliente-Servidor es apropiado.',
                'ARTICULO3'=> 'Bajo ancho de banda: Visual FoxPro es el producto de gestión de bases de datos LAN y de escritorio más rápido y potente del mercado actual. Pero los VFP obtienen un rendimiento excepcional al aprovechar el entorno LAN, obtener información de columnas y realizar algún tipo de almacenamiento en caché de encabezados de tablas y contenido de índice localmente. Aunque este rastreo es prácticamente imperceptible en un entorno de red, lo que retrasa la apertura de la tabla sin procesar unos pocos milisegundos, esto puede ser un retraso significativo si está utilizando una conexión "delgada" (como una conexión telefónica, WAN o sobrecargada). conexiones a Internet) entre el cliente y los datos. En estos casos, colocar la responsabilidad de los datos, la consulta y el procesamiento en el servidor reduce los costos de conexión y mejora la velocidad.',
                'ARTICULO4'=> 'Desventajas
                Dependencia en el servidor. Toda la red está construida alrededor del servidor, y si el servidor falla o falla, afecta a toda la infraestructura.
                Costo elevado: En la instalación y mantenimiento debido a una mayor apariencia técnica en el lado del servidor.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80',
                'UNIDAD' => '1',
                'slug' => 'ventajas_cliente_servidor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Concepto de cómputo en la nube',
                'DESCRIPCION' => 'Definir el concepto de computo en la nube',
                'ARTICULO1'=> 'La computación en la nube es la interconexión de los recursos informáticos, incluido el almacenamiento, las capacidades de procesamiento, las bases de datos, las redes, el análisis, la inteligencia artificial y las aplicaciones de software a través de Internet (la nube). Al subcontratar estos recursos, las empresas pueden acceder a los activos de TI que necesitan, cuando los necesitan, sin tener que comprar y mantener una infraestructura de TI local. Esto proporciona recursos flexibles, una innovación más rápida y economías de escala. Para muchas empresas, pasarse a la nube está directamente relacionado con la actualización de la TI y los datos.',
                'ARTICULO2'=> 'Características de computo en la nube 
                                Previo a la llegada del cloud computing, las organizaciones adquirían y mantenían infraestructura de TI local. Si bien el ahorro de costos impulsó la mayor parte del cambio inicial a la nube, muchas organizaciones descubrieron que la infraestructura de nube pública, privada o híbrida ofrece muchos beneficios.
                                Para equipos inteligentes y DevOps, la computación en la nube puede simplificar y acelerar el proceso de desarrollo.',
                'ARTICULO3'=> 'A continuación, se muestra una lista de características que definen la computación en la nube.',
                'ARTICULO4'=> 'Amplio acceso a la red
                                La ubicación física del dispositivo es una preocupación importante para una experiencia de usuario óptima. La computación en la nube tiene una ventaja significativa al ofrecer dispositivos físicos distribuidos globalmente, lo que permite a las organizaciones ofrecer estratégicamente dispositivos orientados a la ubicación.
                                Autoservicio bajo demanda
                                Los proveedores de servicios en la nube proporcionan API a las que los usuarios pueden acceder para solicitar nuevos recursos o ampliar los recursos existentes según sea necesario. Los equipos pueden automatizar fácilmente su proceso de aprovisionamiento de infraestructura utilizando herramientas de infraestructura a código como Terraform y Ansible.',
                'ARTICULO5'=> 'Agrupación de recursos
                                 En una plataforma de infraestructura en la nube, los recursos informáticos se segmentan y asignan dinámicamente en función de la demanda. Dado que los dispositivos físicos en el alojamiento en la nube se aprovisionan dinámicamente y se comparten entre múltiples inquilinos, los dispositivos en la nube se optimizan de manera óptima para obtener el máximo beneficio.',
                'ARTICULO6'=> 'Rápida elasticidad
                                Las infraestructuras en la nube pueden crecer y escalarse dinámicamente, lo que permite a los usuarios exigir que sus recursos informáticos se escalen dinámicamente según las necesidades del tráfico. El escalado puede ocurrir en dispositivos individuales, donde la asignación de recursos aumenta para maximizar los recursos disponibles, o en varios dispositivos, donde una aplicación se escala automáticamente a dispositivos a través de múltiples redes.
                                Medición del servicio
                                Los proveedores de infraestructura en la nube proporcionan métricas de uso detalladas que se utilizan para informar los costos de uso. Por ejemplo, Amazon Web Services (AWS) proporciona un uso diario o por hora por clase de servicio. Los proveedores de la nube adoptan un modelo de entrega de "pago por uso" y un modelo de pago medido, cobrando a los clientes en función de la cantidad de recursos informáticos que utilizan.',
                'IMAGEN' => 'https://i2ds.org/wp-content/uploads/2020/03/computacion-en-la-nube-para-empresas.png',
                'UNIDAD' => '1',
                'slug' => 'concepto_computo_nube',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Concepto de IAAS PAAS y SAAS',
                'DESCRIPCION' => 'Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).',
                'ARTICULO1'=> 'Infraestructura como servicio
                                Piense en IaaS como componentes de computación en la nube. En este modelo, el proveedor de la nube aloja componentes de infraestructura que tradicionalmente se alojan en centros de datos locales. Por ejemplo, los servidores, la memoria, los dispositivos de red y el hipervisor (capa de virtualización) suelen estar alojados localmente. Con IaaS, su organización puede elegir cuándo y cómo desea administrar las cargas de trabajo sin tener que comprar, administrar y respaldar una infraestructura básica. IaaS pone la infraestructura en funcionamiento rápidamente mediante un modelo de pago por uso.',
                'ARTICULO2'=> 'Plataforma como servicio
                                PaaS es complementario al modelo IaaS, pero suele ser algo específico de las herramientas de hardware y software para el desarrollo de aplicaciones. Además de proporcionar componentes de infraestructura, los proveedores de nube también alojan y administran sistemas operativos y desarrolladores de middleware que necesitan crear y ejecutar aplicaciones. PaaS ofrece un formulario de pago bajo demanda.',
                'ARTICULO3'=> 'Software como servicio
                                En el modelo SaaS, los proveedores alojan y administran toda la infraestructura, así como las aplicaciones de los usuarios finales. Cuando su empresa elige un modelo SaaS, no tiene que instalar nada; Los usuarios podrán iniciar sesión e inmediatamente comenzar a usar la aplicación del proveedor de la nube que se ejecuta en la infraestructura. SaaS le permite pensar en cómo su empresa utilizará este software, en lugar de mantenerlo. SaaS está disponible previa solicitud o suscripción.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.stackscale.com/wp-content/uploads/2020/04/modelos-servicios-cloud-iaas-paas-saas-stackscale.jpg',
                'UNIDAD' => '1',
                'slug' => 'concepto_iaas_paas_saas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Arquitectura Cliente/Servidor con los modelos de cómputo en la nube',
                'DESCRIPCION' => 'Describir la arquitectura  Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS.',
                'ARTICULO1'=> 'Infraestructura como servicio
                                 Microsoft Azure: Microsoft también tiene un servicio IaaS con Azure. En él, puede crear nodos de hardware personalizados para CPU, memoria, memoria y velocidad de red. En esta infraestructura, los clientes pueden ejecutar sus propias aplicaciones comerciales, como SAP o Sharepoint, sin tener que preocuparse por el hardware necesario para hacerlo. Microsoft Azure cuenta con una gran cantidad de recursos que se pueden contratar, lo que lo hace ideal para empresas con necesidades de infraestructura muy exigentes.',
                'ARTICULO2'=> 'Plataforma como servicio
                                Google App Engine: este servicio de Google se enfoca en permitir que los clientes publiquen aplicaciones web a través de Internet sin tener que preocuparse por la infraestructura para hacerlo. Como resultado, los clientes se centran únicamente en crear y configurar sus aplicaciones, y Google proporciona los recursos necesarios. Google App Engine tiene un equilibrador de carga que equilibra los recursos necesarios en función de las necesidades de la aplicación, para que no tengas que preocuparte por la escalabilidad.',
                'ARTICULO3'=> 'Software como servicio
                                WordPress: Instale WordPress en un servidor para diseñar un sitio web que lleve a un sitio web o página web a la que los usuarios puedan acceder desde cualquier dispositivo a través de Internet. WordPress es un software que se ejecuta en un servidor remoto, con el que los usuarios interactúan sin tener que hacer nada con la infraestructura necesaria para ejecutarlo.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'http://blogs.encamina.com/por-una-nube-sostenible/wp-content/uploads/sites/19/2016/07/iaas-saas-paas.png',
                'UNIDAD' => '1',
                'slug' => 'arquitectura_iaas_paas_saas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Conceptos de presentación distribuida, remota, lógica o proceso distribuida',
                'DESCRIPCION' => 'Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.',
                'ARTICULO1'=> 'Los sistemas distribuidos han existido en el mundo de la informática de una forma u otra desde hace bastante tiempo, aunque no se denominan explícitamente sistemas distribuidos ni son tan flexibles como lo son hoy. Inicialmente, solo había mainframes o mainframes que ejecutaban un sistema de gestión de base de datos descentralizado (DBMS). Conecte a los usuarios a la computadora central a través de terminales equipados con conexiones de punto a servidor. Los mainframes son costosos y difíciles de mantener, pero pueden servir a una gran cantidad de usuarios y tienen la ventaja (o desventaja) de ser administrados de forma centralizada. En este tipo de sistema, el software es monolítico, es decir, la interfaz de usuario, la lógica comercial y el acceso a la base de datos están contenidos en una gran aplicación que se ejecuta en el mainframe. Dado que los terminales utilizados para conectarse a la computadora central no tienen capacidad de procesamiento, toda la aplicación se ejecuta por completo en la computadora central.',
                'ARTICULO2'=> 'La llegada del ordenador personal supuso un cambio muy significativo en las arquitecturas monolíticas y en las aplicaciones desarrolladas para ellas. Nuevas aplicaciones basadas en el modelo cliente/servidor permitieron bajar parte del procesamiento que se realizaba en el servidor a los equipos cliente. Las aplicaciones cliente/servidor suelen presentar componentes de la aplicación como la base de datos en el servidor, la interfaz de usuario en el cliente y la lógica empresarial que puede estar ubicada en el cliente (como código) o en el servidor (como un procedimiento almacenado), o en ambos. Con el advenimiento de la arquitectura cliente/servidor en niveles, la arquitectura cliente/servidor se conocía originalmente como cliente-servidor de dos niveles.',
                'ARTICULO3'=> 'La arquitectura cliente/servidor es una revolución que ha cambiado la forma antigua de hacer las cosas. Si bien se han resuelto muchos problemas de aplicaciones basadas en mainframe, la arquitectura cliente/servidor tiene sus propios problemas. Por ejemplo, debido a que la lógica empresarial y el acceso a la base de datos suelen estar contenidos en el lado del cliente, cualquier cambio en la lógica empresarial, el acceso a la base de datos o la propia base de datos normalmente requerirá actualizaciones del lado del cliente para todos los usuarios de la aplicación. Los problemas de la arquitectura cliente/servidor tradicional, comúnmente conocida como cliente/servidor de dos niveles, han sido resueltos por lo que se conoce como cliente/servidor de varios niveles. Conceptualmente, una aplicación puede tener cualquier cantidad de niveles, pero las arquitecturas multinivel generalmente tienen solo tres niveles.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.tecnologias-informacion.com/distri.jpg',
                'UNIDAD' => '2',
                'slug' => 'concepto_presentacion_distribuida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Conceptos de lógica de acceso y negocio de datos',
                'DESCRIPCION' => 'Definir los conceptos de lógica de acceso, presentación y negocio a datos.',
                'ARTICULO1'=> 'Lógica de acceso
                El control de acceso adecuado es la primera línea de defensa para la mayoría de los sistemas y evita que personas no autorizadas accedan a su información. Se utilizan dos procesos para controlar el acceso: identificación y autenticación.
                Se denomina identidad al momento en que el usuario se identifica en el sistema; y autenticación para verificar que el sistema opera con esta identidad.',
                'ARTICULO2'=> 'Es más efectivo cuando los usuarios son reconocidos y autenticados solo una vez, y ahora pueden acceder a todas las aplicaciones y datos autorizados por su perfil, local o remotamente. Esto se denomina inicio de sesión único o sincronización de contraseñas. Un posible enfoque para implementar esta identidad única es usar un servidor de autenticación a través del cual los usuarios se identifican y luego son responsables de autenticarlos en otras computadoras a las que pueden acceder. Este servidor no es necesariamente una computadora independiente y sus funciones pueden distribuirse geográfica y lógicamente. Este es el caso de los servidores LDAP en GNU/Linux y Active Directory en Windows Server.',
                'ARTICULO3'=> 'Negocio de datos
                Los datos obtenidos en sí mismos no tienen mucho coraje, pero cuando se analizan y comparten, como la compañía, le permite crear un perfil de usuario muy específico y dedicado. Como dijimos, la compañía ofrece servicios, por ejemplo, teme que el máximo puede anunciar sus anuncios para que los clientes potenciales puedan comprar o específicos.
                Por lo tanto, por ejemplo, si mi empresa está dedicada a vender hardware para computadoras, quiero centrarme en nuestros anuncios con este tipo de consumidor y empleo antes de encontrarlos más.',
                'ARTICULO4'=> 'Por lo tanto, se obtiene información específica gracias a la recopilación y el análisis de datos, y el precio puede ser más excelente. Es difícil hablar sobre porcentajes específicos, dados los datos de datos, ya que mueve mucho entre el olvido legal e ilegal, exactamente transparente, en algunos sitios, puede obtener nombres y correos electrónicos con cáncer, diabetes o depresión. 26 cintas de nombres.
                Es cierto que las ventas de datos a menudo se asocian con actividades cuestionables o rentables, pero también es cierto que esta recopilación y análisis de datos se utiliza para otras cosas que pueden ayudar a la vida diaria de las personas y es más fácil para todos.',
                'ARTICULO5'=> 'Por ejemplo, cuando una empresa realiza una investigación que recopila datos aislados y anónimos para averiguar cómo se mueve la gente en ciertas áreas de una ciudad, estos datos se pueden usar para ubicar una parada de autobús o determinar el valor comercial de un área específica. O en medicina se pueden hacer estudios que relacionen ciertos hábitos con el desarrollo de enfermedades.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.fevox.co/wp-content/uploads/2017/09/Acceso-logico.jpg',
                'UNIDAD' => '2',
                'slug' => 'concepto_logica_acceso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Diseño de lógica de acceso a datos, lógica de presentación de datos',
                'DESCRIPCION' => 'Explicar el proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación. ',
                'ARTICULO1'=> 'Los componentes lógicos acceden a los datos. Proporcionan una interfaz para la capa empresarial que resume cómo se accede a los datos almacenados, lo que facilita la configuración y el mantenimiento de las aplicaciones.',
                'ARTICULO2'=> 'Componentes de utilidad y componentes auxiliares. Estos incluyen bibliotecas especializadas o API que permiten acceder, manipular o transformar datos dentro de componentes lógicos de acceso a datos. Por lo general, lo proporciona el fabricante del administrador de la base de datos (Oracle, IBM, etc.)',
                'ARTICULO3'=> 'La capa de presentación incluye la lógica de la aplicación, prepara los datos para enviarlos a la capa del cliente y procesa las solicitudes de la capa del cliente para entregarlos a la lógica de negocios en el servidor. La lógica de la capa de visualización normalmente incluye componentes J2EE, como Java Servlet o componentes JSP que preparan datos para enviarlos en HTML o XML o recibir solicitudes de procesamiento. Esta capa también puede incluir un servicio de puerta de enlace que proporciona acceso personal y seguro a los servicios comerciales en la capa de servicios comerciales.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://4.bp.blogspot.com/-3j--fZkMaTQ/WC-bkw4uOcI/AAAAAAAAAnc/uRbmxeeVBuUTPBfdGP-gJPSIEsIwc3FkwCLcB/s1600/Herramientas_Hacking-770x433.jpg',
                'UNIDAD' => '2',
                'slug' => 'diseño_de_logica_de_acceso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Concepto de nivel vinculado a programación web',
                'DESCRIPCION' => 'Hoy en día existen muchos métodos de desarrollo multinivel. Muchas aplicaciones se diseñaron originalmente para programar aplicaciones tradicionales orientadas a un tipo específico de sistema operativo.',
                'ARTICULO1'=> 'Luego se adaptó para su implementación en un entorno de desarrollo orientado a la web. Algunos de ellos son ciertamente efectivos en cualquier plataforma. Pero el hecho de que hayan sido diseñados inicialmente para el entorno tradicional no les permite desarrollar todo su potencial a la hora de programar para la web.',
                'ARTICULO2'=> 'Modelo MVC
                El patrón más popular hoy en día es el patrón MVC. Además de este modelo, existen muchas aplicaciones como Ruby on Rails o Cake PHP. La principal ventaja del patrón es que separa la lógica de programación en tres partes: el modelo, la vista y el control.',
                'ARTICULO3'=> 'Según la experiencia de los programadores que han utilizado este modelo de desarrollo, es bastante adecuado para proyectos pequeños, pero a medida que aumenta la complejidad del proyecto, la integración se vuelve perfecta sin comprometer otras estructuras.
                Puede ser muy difícil seguir desarrollando una aplicación con un mayor nivel de complejidad, si no tenemos suficiente experiencia en el manejo de este concepto. En particular, veo un problema serio con esta situación, además de usar el modelo, usar cualquier tecnología como Ruby on Rails u otros marcos de desarrollo, para llevar todo nuestro proyecto al dominio público, esta o aquella tecnología.',
                'ARTICULO4'=> 'Esto puede ser un problema grave, ya que existe una tendencia hacia nuevas herramientas que son más fáciles de usar, y constantemente se desarrollan y lanzan variantes de ellas, como paquetes independientes de la plataforma.
                Existe un gran potencial en cualquier tecnología para el desarrollo de aplicaciones para Internet. Hay muchos lenguajes de secuencias de comandos disponibles en la actualidad y todos ellos brindan una excelente solución para un conjunto específico de necesidades.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://indexdesarrollo.com/wp-content/uploads/2017/11/aprender-programacion-web.jpg',
                'UNIDAD' => '2',
                'slug' => 'concepto_nivel_vinculado_programacion_web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                
                'TITULO'=>'Proceso de planificación en dos niveles',
                'DESCRIPCION' => 'Explicar el proceso de planificación en dos niveles. ',
                'ARTICULO1'=> 'Habrá procesos ejecutables almacenados en el disco.
                Habrá implicaciones importantes para la planificación, como las siguientes:
                El tiempo de cambio de proceso para recuperar y dar servicio a un proceso desde el disco es mucho más largo que el tiempo que tarda un proceso que ya está en la memoria principal.',
                'ARTICULO2'=> 'Es más eficiente cambiar las operaciones mediante la programación de dos niveles.
                El esquema de trabajo del programador de dos niveles es el siguiente:
                Un subconjunto específico de ejecuciones se carga en la memoria principal. 
                El planificador se limita a ellos durante un período determinado.',
                'ARTICULO3'=> 'El programador de nivel superior se llama periódicamente para realizar las siguientes tareas:
                Elimine procesos de la memoria que hayan estado ahí por mucho tiempo. 
                Cargue procesos que han estado en el disco durante mucho tiempo en la memoria. 
                El planificador de nivel inferior se limita de nuevo a las ejecuciones en memoria.',
                'ARTICULO4'=> 'El programador de nivel superior es responsable de mover los procesos de la memoria al disco y viceversa. 
                Los criterios que los planificadores senior pueden utilizar para tomar sus decisiones son:
                ¿Cuánto tiempo ha pasado desde la última transacción en este proceso? 
                ¿Cuánto tiempo de CPU ha estado usando este proceso recientemente? ',
                'ARTICULO5'=> '¿Cuál es el tamaño de la operación? (Las operaciones pequeñas generalmente no causan muchos problemas en este sentido). 
                ¿Cuál es la prioridad de la operación? 
                El programador de nivel superior puede utilizar cualquiera de los métodos de programación descritos.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.mejorconweb.com/images/programacion-web-barcelona.jpg',
                'UNIDAD' => '2',
                'slug' => 'proceso_planificacion_dos_niveles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],





            ////romero

            [
                'TITULO'=>'Planificación en tres niveles.',
                'DESCRIPCION' => 'Explicar el proceso de planificación en tres niveles.',
                'ARTICULO1'=> 'El nivel de Idealización Estratégica ',
                'ARTICULO2'=> 'Posibilita la obra de el punto de vista, la Labor institucional y la preparación de objetivos estratégicos 
                                Se fundamenta en la organización general proyectada al cumplimiento de metas y objetivos institucionales y su finalidad es el establecimiento de fronteras generalmente de acción. 
                                Se concibe como el proceso de elección y establecimiento de las metas de la organización, de los recursos que se utilizarán y de las políticas y normas que alinearán el desempeño de la organización. 
                                Está estrechamente vinculada con el diseño de la Estructura organizacional y se aplica en zonas específicas, que usualmente son las que vigilan y definen puntos de vista que no son posibles delimitar en otros niveles.',
                'ARTICULO3'=> 'El nivel de Idealización Programática',
                'ARTICULO4'=> 'Es necesario destacar que el nivel programático se convierte en el puente que articula el nivel estratégico con el nivel operativo. ',
                'ARTICULO5'=> 'El nivel de Planificación Operativa ',
                'ARTICULO6'=> 'Establece con claridad las actividades y metas que se deben lograr en el corto plazo para afirmar el logro de las metas.',
                'IMAGEN' => 'https://i0.wp.com/oness.sourceforge.net/proyecto/html/images/three_layers.gif',
                'UNIDAD' => '2',
                'slug' => 'planificación_en_tres_niveles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Planificación en multiniveles',
                'DESCRIPCION' => 'Explicar el proceso de planificación en tmultiniveles',
                'ARTICULO1'=> 'La aplicación radica en el cliente en lo que la base de datos está en el servidor. ',
                'ARTICULO2'=> 'Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de 3 niveles: interfaz de presentación, lógica de la aplicación y los datos. ',
                'ARTICULO3'=> 'La capa de presentación recibe los datos y los formatea para mostrarlos de manera correcta. Esta división entre la capa de presentación y la de la lógica permite una enorme flexibilidad en el instante de construir aplicaciones, ya que pueden tener diferentes interfaces sin cambiar la lógica de la aplicación. ',
                'ARTICULO4'=> 'La tercera capa se fundamenta en los datos que gestiona la aplicación. ',
                'ARTICULO5'=> 'Modificar un sistema de 3 niveles a otro multinivel es sencilla ya que se fundamenta en extender la capa intermedia permitiendo que convivan distintas aplicaciones en lugar de una sola',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.udg.co.cu/cmap/sistemas_operativos/planificacion_cpu/colas_mult_retro/images/multinivel.jpg',
                'UNIDAD' => '2',
                'slug' => 'planificación_en_multiniveles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Problemas de actualización y mantenimiento de aplicaciones multinivel.',
                'DESCRIPCION' => 'Identificar problemas de actualización y mantenimiento de aplicaciones multinivel.',
                'ARTICULO1'=> 'El primer grado se apoya en la capa de presentación que incluye no solamente el navegador, sino además el servidor web que es el responsable de ofrecer a los datos un formato correcto. Al final, el tercer grado da al segundo los datos necesarios para su ejecución. ',
                'ARTICULO2'=> 'Una aplicación Web clásica recogerá datos del cliente (primer nivel), los enviará al servidor, que ejecutará un programa (segundo y tercer nivel) y cuya consecuencia va a ser formateado y presentado al cliente en el navegador (primer grado otra vez).',
                'ARTICULO3'=> '',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.infor.uva.es/~jvegas/cursos/buendia/pordocente/img4.gif',
                'UNIDAD' => '2',
                'slug' => 'problemas_de_actualización_y_mantenimiento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.',
                'DESCRIPCION' => 'Reconocer los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor.',
                'ARTICULO1'=> 'El modelo es el responsable de: ',
                'ARTICULO2'=> ' Lo ideal es que el modelo sea independiente del sistema de almacenamiento. 
                                Una ejemplificación de regla puede ser: "Si la mercancía pedida no está en el depósito, consultar la era de entrega estándar del abastecedor".',
                'ARTICULO3'=> 'Vista',
                'ARTICULO4'=> 'Lleva un registro de las vistas y controladores del sistema. Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un representante externo (por ejemplo, un fichero por lotes  que actualiza los datos, un temporizador que desencadena una inserción, etc.).',
                'ARTICULO5'=>   'El controlador es responsable de: ',
                'ARTICULO6'=> 'Estas actividades pueden suponer peticiones al modelo o a las vistas. Una de estas solicitudes a las vistas puede ser una llamada al método "Actualizar() Pueden dar el servicio de "Actualización()", para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos hechos por otros agentes).',
                'IMAGEN' => 'https://eltecnoanalista.com/wp-content/uploads/2020/08/Modelo-Cliente-Servidor-2.png',
                'UNIDAD' => '2',
                'slug' => 'conceptos_de_modelo_control_y_vista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Concepto del Modelo Vista Controlador (MVC) en las arquitecturas  Cliente/Servidor.',
                'DESCRIPCION' => 'Reconocer el concepto del Modelo Vista Controlador (MVC) en las arquitecturas  Cliente/Servidor.',
                'ARTICULO1'=> 'Modelo Vista Controlador (MVC) es un estilo de arquitectura de programa que separa los datos de una aplicación, la interfaz de comprador, y la lógica de control en 3 recursos varios. ',
                'ARTICULO2'=> 'La Vista, o interfaz de comprador, que compone la información que se envía al cliente y los mecanismos interacción con éste. ',
                'ARTICULO3'=> 'El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.freecodecamp.org/espanol/news/content/images/2021/06/MVC3.png',
                'UNIDAD' => '2',
                'slug' => 'concepto_del_Modelo_Vista_Controlador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Proceso de flujo de control a partir del MVC, en las arquitecturas  Cliente/Servidor.',
                'DESCRIPCION' => 'Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas  Cliente/Servidor.',
                'ARTICULO1'=> 'El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el comprador (por ejemplo, el controlador actualiza el carro de la compra del usuario).',
                'ARTICULO2'=> 'El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de comprador. La vista obtiene sus datos del modelo para crear la interfaz correcta para el comprador donde se refleja los cambios en el modelo (por ejemplo, crea un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podría utilizar el líder Observador para ofrecer cierta indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio.',
                'ARTICULO3'=> 'Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. Nota: En numerosas implementaciones la vista no tiene ingreso directo al modelo, dejando que el controlador envíe los datos del modelo a la vista.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://si.ua.es/es/documentacion/asp-net-mvc-3/imagenes/introduccion/flujo-mvc.png',
                'UNIDAD' => '2',
                'slug' => 'flujo_de_control_a_partir_del_MVC',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor.',
                'DESCRIPCION' => 'Describir el desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor.',
                'ARTICULO1'=> 'MVC era al inicio un líder arquitectural, un modelo o guía que expresa cómo ordenar y estructurar los recursos de un sistema programa, sus responsabilidades y las colaboraciones existentes entre todos ellos.',
                'ARTICULO2'=> 'Es una y otra vez considerado además un líder de diseño de la capa de presentación, pues define la forma en que se organizan los recursos de presentación en sistemas distribuidos. ',
                'ARTICULO3'=> 'Aunque el auge de este término durante los últimos tiempos pueda indicar lo contrario, MVC no es un criterio nuevo, ya que el líder fue descrito en el año 1979 por Trygve Reenskaug, actualmente profesor emérito de informática de la Universidad de Oslo, mientras trabajaba con los equipamientos de Smalltalk en los laboratorios Xerox PARC.',
                'ARTICULO4'=> '',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://www.arquitecturajava.com/wp-content/uploads/patronMVCCliente-2.png',
                'UNIDAD' => '2',
                'slug' => 'desarrollo_de_software_a_partir_del_MVC',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Concepto de sockets.',
                'DESCRIPCION' => 'Definir el concepto de sockets.',
                'ARTICULO1'=> 'Para que 2 procesos logren comunicarse entre sí se necesita que se cumplan ciertos requisitos: ',
                'ARTICULO2'=> 'Que un proceso sea capaz de ubicar al otro. ',
                'ARTICULO3'=> 'Dos direcciones del protocolo de red (dirección IP, si se usa el protocolo TCP/IP), que identifican la PC de procedencia y la remota.',
                'ARTICULO4'=> 'La comunicación debería ser iniciada por uno de los procesos que se llama programa "comprador".',
                'ARTICULO5'=> 'Un socket es un proceso o hilo que existe en la máquina comprador y en la máquina servidora, que sirve en última instancia para que el programa servidor y el comprador lean y escriban la información.',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://i0.wp.com/msaffirio.com/wp-content/uploads/2018/05/apis-e1527018663939.png?fit=1251%2C716&ssl=1',
                'UNIDAD' => '2',
                'slug' => 'concepto_de_sockets',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'TITULO'=>'Proceso del uso de sockets en aplicaciones Cliente/Servidor.',
                'DESCRIPCION' => 'Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor.',
                'ARTICULO1'=> 'Los mecanismos tradicionales de comunicación entre procesos en UNIX (semáforos, colas de mensajes, memoria compartida y “pipes”) permiten que procesos independientes cooperen, se excluyan mutuamente de secciones criticas e intercambien datos, conceptos que los estudiantes estudian en la asignatura de Sistemas Operativos.',
                'ARTICULO2'=> 'A pesar de su utilidad para comunicar procesos que residen en la misma máquina, su extensión a un entorno en red es complejo e añade una sintaxis diferente a la que se utiliza en otras operaciones habituales como, por ejemplo, el manejo de ficheros. La utilización de sockets permite superar estas limitaciones proporcionando una forma homogénea de enfocar la comunicación entre procesos, tanto en una maquina aislada como en un entorno de red.',
                'ARTICULO3'=> 'En el campo maestro, las prácticas realizadas con sockets están bastante generalizadas ya que establecen los fundamentos de la comunicación y permiten el conocimiento de sus procesos más básicos.',
                'ARTICULO4'=> 'En el campo maestro, las prácticas realizadas con sockets están bastante generalizadas ya que establecen los fundamentos de la comunicación y permiten el conocimiento de sus procesos más básicos.',
                'ARTICULO5'=> '',
                'ARTICULO6'=> '',
                'IMAGEN' => 'https://slideplayer.es/slide/1397212/3/images/10/SOCKET+SOCKET+SOCKET+SOCKET+PROCESO+PROCESO+Internet+HOST+O+SERVIDOR.jpg',
                'UNIDAD' => '2',
                'slug' => 'proceso_del_uso_de_sockets_en_aplicaciones',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
