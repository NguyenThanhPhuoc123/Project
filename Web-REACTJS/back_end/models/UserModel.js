import { Sequelize } from "sequelize";
import db from "../config/Database.js";

const {DataTypes} = Sequelize;

const User = db.define('sanpham',{
    name: DataTypes.STRING,
    price: DataTypes.FLOAT,
    description: DataTypes.STRING,
    img: DataTypes.STRING
},{
    freezeTableName: true,
    timestamps: false,
});
export default User;

(async()=>{
    await db.sync();
})();