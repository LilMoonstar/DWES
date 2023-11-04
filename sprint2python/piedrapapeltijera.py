import random  # Importamos el módulo 'random' para generar elecciones aleatorias.

print("JUEGO NUEVO")

# Inicializamos los 
num_partidas = 0  
ganadas = 0       
perdidas = 0     
empatadas = 0     

while num_partidas < 5:  # Comenzamos un bucle que se repetirá hasta que se jueguen 5 partidas.
    print()
    while True:
            # Solicita al usuario que elija piedra, papel o tijera y convierte la entrada en minúsculas para evitar confusiones de caracteres.
            eleccion_usuario = input(f"Partida: {num_partidas + 1} Elige piedra, papel o tijera: ").lower()
            
            # Comprobamos si la elección del usuario es válida
            if eleccion_usuario in ["piedra", "papel", "tijera"]:
                break
            else:
                print("Elección no válida. Por favor, elige piedra, papel o tijera.")

    # Creamos una lista de opciones posibles para la máquina.
    opciones = ["piedra", "papel", "tijera"]
    
    # ELa máquina elige aleatoriamente una opción de la lista.
    eleccion_máquina = random.choice(opciones)
    print(f"La máquina ha escogido: {eleccion_máquina}")
    
    # Determinamos el resultado de la partida comparando las elecciones del usuario y la máquina.
    if eleccion_usuario == eleccion_máquina:
        resultado = "Empate"  # Si las elecciones son iguales, la partida es un empate.
        empatadas += 1  # Incrementa el contador de partidas empatadas. "Empatadas += 1" es lo mismo que poner "empatadas = empatadas + 1"
    elif (eleccion_usuario == "piedra" and eleccion_máquina == "tijera") or (eleccion_usuario == "papel" and eleccion_máquina == "piedra") or (eleccion_usuario == "tijera" and eleccion_máquina == "papel"):
        resultado = f"Has ganado, {eleccion_usuario} gana a {eleccion_máquina}"  # El jugador gana si se cumplen estas condiciones.
        ganadas += 1  # Incrementa el contador de partidas ganadas.
    else:
        resultado = f"Has perdido, {eleccion_máquina} gana a {eleccion_usuario}"  # El jugador pierde en cualquier otra condición (sólo tenemos
        #las de derrota porque hemos declarado toda condición ya sea de victoria o empate previamente).
        perdidas += 1  # Incrementa el contador de partidas perdidas.

    num_partidas += 1  # Incrementa el contador de partidas jugadas.
    
    # Muestra un resumen de la partida actual, incluyendo los contadores actualizados.
    print()
    print(f"NÚMERO DE PARTIDAS: {num_partidas} // GANADAS: {ganadas} // PERDIDAS: {perdidas} // EMPATADAS: {empatadas}")
    print()

print(f"Juego terminado. Has ganado {ganadas} partida(s), perdido {perdidas} partida(s) y empatado {empatadas} partida(s). ¡Gracias por jugar!")  # Muestra un mensaje de finalización del juego.
# Muestra el resultado final.
