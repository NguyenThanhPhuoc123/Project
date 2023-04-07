import { Sequelize } from "sequelize";

const db  = new Sequelize('udw','root','',{
    host: 'localhost',
    dialect: 'mysql'
});

export default db;