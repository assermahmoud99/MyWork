  const {
    createPool
} = require('mysql');

const pool = createPool({
    host:'localhost',
    user: 'root',
    password: '',
    database: 'exp',
    connectionLimit:10
})

 pool.query(`select count(name) as y,name as x from exp.courses group by courses.name` ,(err ,result,fields) => {
    if(err){
      return console.log(err);
    }
    let arr=[result];
    return console.log(arr);
  })

  module.exports = pool;
