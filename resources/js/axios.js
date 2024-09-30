import axios from 'axios';

const getProducts = async () => {
    const response = await axios.get('http://localhost:3001/api/users')
    const users = response.data;
    console.log(users);
};
getProducts();
