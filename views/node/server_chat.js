var http=require("http");

httpServer= http.createServer(function(req,res){
})

httpServer.listen(1337);

var io =require("socket.io").listen(httpServer);
	var tableau_id_personne_connecter=[];
	var id_client_connecter_admin=-1;
	var id_activiter_connecter=-1;

io.sockets.on("connection",function(socket_user){
	var message;

		socket_user.on('demarer_activiter',function(d){
			socket_user.broadcast.emit("actualiser",{id_activiter:d.id_activiter})
		})

		socket_user.on('connecter',function(user){
			tableau_id_personne_connecter.push(user.id_client);
		})
		socket_user.on('deconnexion',function(user){
			tableau_id_personne_connecter.splice(tableau_id_personne_connecter.indexOf(user.id_client), 1);
		})
		socket_user.on('admin_client',function(user){
			id_client_connecter_admin=user.id_client;
		})

		socket_user.on('send_message',function(user){
			message=user;
			if(tableau_id_personne_connecter.indexOf(user.id_client)!=-1){
			socket_user.broadcast.emit("nouveau_message",message);	
			}else{
				socket_user.broadcast.emit("notification_message",message);
			}
		})

		socket_user.on('send_message_admin',function(user){
			message=user;
			if(id_client_connecter_admin==user.id_client){
			socket_user.broadcast.emit("nouveau_message_admin",message);	
			}else{
				socket_user.broadcast.emit("notification_message_admin",message);
			}
		})

		socket_user.on("reduire",function(nombre){
    	io.sockets.emit("resd",{nombre_message:nombre.nombre_message})
})

				socket_user.on("connexion_activiter",function(nombre){
    	id_activiter_connecter=parseInt(nombre.nombre);
})

				socket_user.on("envoyer_notification",function(data){
					io.sockets.emit("recevoir_notification",{type:data.type,message:data.message});
				})

				socket_user.on("next_step",function(data){
					if(data.id_activiter==id_activiter_connecter){
					io.sockets.emit("actualiser_etape",{id_client:data.id_client});
					}
				})

				socket_user.on("envoyer_notification_client",function(data){
					socket_user.broadcast.emit("recevoir_notification",{id_client:data.id_client});
				})
				socket_user.on("evolution",function(data){
					socket_user.broadcast.emit("evolution_etape",{id_activiter:data.id_activiter,id_client:data.id_client});
				})

})
