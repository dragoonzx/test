var express = require('express')

var http = require('http')

var app = express()

var port = 8000

var httpServer = http.createServer(app)

app.use(express.static(__dirname))
app.use(express.static(__dirname + '/client'))

app.get('/', function(req, res) {
  res.sendFile(__dirname + '/client/themes/Profchistka/index.html')
})

httpServer.listen(port, () => console.log('server is listening'))
