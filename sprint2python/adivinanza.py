import random  # Importamos el módulo random para generar números aleatorios

print("Adivinanza\nEscoge la opción correcta entre estas 3 adivinanzas:")
puntos = 0

# Creamos una lista con las tres adivinanzas y sus respectivas características para después mostrarlas con una elección aleatoria
adivinanzas = [
    {
        "pregunta": "Tengo agujas y no sé coser, tengo números y no sé leer, ¿qué soy?",
        "opciones": ["A un reloj", "B Una patata", "C Una mezcladora de cemento"],
        "respuesta": "A"
    },
    {
        "pregunta": "Tu can no soy, tu gato tampoco, pero tu can me dicen y vivo en los trópicos...",
        "opciones": ["A Una Cacatúa", "B Un tucán", "C La revolución industrial"],
        "respuesta": "B"
    },
    {
        "pregunta": "¿Qué es, que es, del tamaño de una nuez que sube la cuesta y no tiene pies?",
        "opciones": ["A Una cantimplora", "B Un monopatín", "C Un Caracol"],
        "respuesta": "C"
    }
]

# Usamos random.sample para seleccionar dos adivinanzas aleatorias sin repetir# Usamos random.sample para seleccionar dos adivinanzas aleatorias sin repetir
# La función random.sample garantiza que los elementos seleccionados sean únicos,
# lo que significa que no se repetirán en la muestra. Si intentamos seleccionar más
# elementos únicos de los que están disponibles en la secuencia, la función generará una excepción ValueError.
# El 2 es la cantidad de adivinanzas que vamosa  escoger
adivinanzas_seleccionadas = random.sample(adivinanzas, 2)

# Iteramos a través de las adivinanzas seleccionadas. Usamos enumerate para iterar y mostrar la representación de las opciones
# junto con el número de la adivinanza.
# El uso de enumerate permite acceder al índice (número de adivinanza) y al valor (la adivinanza en sí) durante la iteración.
# Esto hace que el código sea más legible y permite mostrar el número de cada adivinanza al usuario mientras responde.

for i, adivinanza in enumerate(adivinanzas_seleccionadas): # Con un for buscamos el conjunto de valores de cada elemento en adivinanzas. (i empieza en 0)
    print()
    print(f"ADIVINANZA NÚMERO {i + 1}") 
    print()
    print(adivinanza["pregunta"])    # Imprimimos la pregunta
    
   # Imprimimos las opciones de respuesta 
    print(adivinanza["opciones"])
    
    intento = input("¿Cuál es la respuesta correcta?")
    
    if intento == adivinanza["respuesta"]:    # Añadimos la sintaxis para comparar respuestas y sumar o restar puntos
        print("CORRECTO!")
        puntos += 10
    else:
        print("INCORRECTO")
        puntos -= 5

print("Puntuación final: " + str(puntos) + " puntos")    # Resultado final