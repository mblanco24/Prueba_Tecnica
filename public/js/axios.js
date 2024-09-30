// traer todos los usuarios
const obtenerUsuarios = async () => {
    try {
        const response = await axios.get("http://localhost:3001/api/users");
        const user = response.data;
        console.log("Estos son los usuarios");
        console.log(user);
    } catch (error) {
        console.log("Error al obtener TODOS usuarios:", error);
    }
};
obtenerUsuarios();


// Función para crear un nuevo usuario
const crearUsuario = async (nuevoUsuario) => {
    try {
        const response = await axios.post("http://localhost:3001/api/register", nuevoUsuario,{
            nombre: 'Nuevo nombre',
            email: 'nuevo_email@example.com'
    });
        console.log("Este es el usuario creado");
        console.log(response);
    } catch (error) {
        console.log("Error al crear usuario:", error);
    }
};
crearUsuario();


//Seleccionar un solo usuario para hacer login
const usuario = (id) = async () => {
    try {
        const response = await axios.post("http://localhost:3001/api/login/${id}",
        )
        console.log("Logueado");
        }
    catch (error) {
        console.log("Error al obtener el usuario solicitado:", error);
    }
}
usuario();

