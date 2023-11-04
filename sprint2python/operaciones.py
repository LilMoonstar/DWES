print("CALCULADORA SIMPLE")

n1 = float(input("Introduce el primer valor: "))
n2 = float(input("Introduce el segundo valor: "))
operacion = input("SELECCIONA LA OPERACIÓN A REALIZAR (SUMA, RESTA, MULT, DIV): ")

if operacion == "SUMA":
    resultado = n1 + n2
    print(f"{n1} + {n2} = {resultado}")
elif operacion == "RESTA":
    resultado = n1 - n2
    print(f"{n1} - {n2} = {resultado}")
elif operacion == "MULT":
    resultado = n1 * n2
    print(f"{n1} x {n2} = {resultado}")
elif operacion == "DIV":
    if n2 == 0:
        print("Error: No se puede dividir por cero.")
    else:
        resultado = n1 / n2
        print(f"{n1} / {n2} = {resultado}")
else:
    print("Operación no válida. Por favor, elige entre SUMA, RESTA, MULT o DIV.")
