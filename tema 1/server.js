

var http = require("http")

var server=http.createServer((function(request,response)
{

response.writeHead(200,
    
    {"Content-Type":"text/plain"});

    response.end("Si buscas el puerto 7000 eres un mal chico\n");

}));

server.listen(7000);