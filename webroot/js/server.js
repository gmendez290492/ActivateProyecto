var express = require('express');
var app = express();
var bodyParser = require('body-parser');

var mysql = require('mysql');
var connection = mysql.createConnection({
   host: 'localhost',
   user: 'root',
   password: '123456',
   database: 'retoactivate',
   port: 3306
});
connection.connect(function(error){
   if(error){
      throw error;
   }else{
      console.log('Conexion correcta');
   }
});


var urlencodedParser = bodyParser.urlencoded({ extended: false })

app.use(express.static('public'));
app.get('/', function (req, res) {
   res.sendFile( __dirname + "/" + "index.html" );
})

app.post('/', urlencodedParser, function (req, res) {
   var fecha = req.body.fecha.split("-");

   var semana=0;
   if (fecha[2]>=1 &&fecha[2]<=7) {
      semana=1;
   }
   if (fecha[2]>=8 &&fecha[2]<=15) {
      semana=2;
   }
   if (fecha[2]>=16 &&fecha[2]<=23) {
      semana=3;
   }
   if (fecha[2]>=24 &&fecha[2]<=31) {
      semana=4;
   }

   response = {
      Usuario:req.body.usuario,
      Pasos:req.body.pasos,
      Año:fecha[0],
      Mes:fecha[1],
      Día:fecha[2],
      semana
   };

   var query = connection.query('INSERT INTO caminatas(pasos, dia, mes, year, idusuario, semana) VALUES(?, ?, ?, ?, ?, ? )', [req.body.pasos,fecha[2] ,fecha[1],fecha[0], req.body.usuario, semana
    ], function(error, result){
      if(error){
         throw error;
      }else{
        console.log(result);
        console.log(response);
        res.end(JSON.stringify(response));
      }
    }
   );
  

})

app.listen(8081, function () {
  console.log('Servidor iniciado')
})

