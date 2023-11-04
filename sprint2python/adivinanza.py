print("Adivinanza \nEscoge la opción correcta entre estas 3 adivinanzas: ")
puntos = 0
print()
print("ADIVINANZA NÚMERO 1")
print()
print("Tengo agujas y no sé coser, tengo números y no sé leer, ¿qué soy?    10 puntos")
print("A un reloj    B Una patata   C Una mezcladora de cemento")
respuesta = input("¿Cuál es la respuesta correcta?")
if respuesta == "A":
    print("CORRECTO!")
    puntos = puntos +10
else:
    print("INCORRECTO")
    puntos = puntos -5
print()
print("ADIVINANZA NÚMERO 2")
print()
print("Tu can no soy, tu gato tampoco, pero tu can me dicen y vivo en los trópicos...    10 puntos")
print("A Una Cacatúa   B Un tucán   C La revolución industrial")
respuesta = input("¿Cuál es la respuesta correcta?")
if respuesta == "B":
    print("CORRECTO!")
    puntos = puntos +10
else:
    print("INCORRECTO")
    puntos = puntos -5
print()
print("ADIVINANZA NÚMERO 3")
print()
print("¿Qué es, que es, del tamaño de una nuez que sube la cuesta y no tiene pies?  10 puntos")
print("A Una cantimplora    B Un monopatín   C Un Caracol")
respuesta = input("¿Cuál es la respuesta correcta?")
if respuesta == "C":
    print("CORRECTO!")
    puntos = puntos +10
else:
    print("INCORRECTO")
    puntos = puntos -5

print("Puntuación final: " + str(puntos) + " puntos")