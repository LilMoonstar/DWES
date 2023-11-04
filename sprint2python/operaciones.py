print("CALCULADORA SIMPLE")

while True:
    # While True es un bucle infinito , lo que significa que el código dentro del bucle se
    # ejecutará de forma continua hasta que se cumpla una condición de salida.
    # En este caso, no hay una condición explícita que termine el bucle, por lo que se ejecutará indefinidamente 
    # hasta que se interrumpa manualmente o se alcance un punto de salida específico (cómo exit()) dentro del bucle.


    # Solicitamos al usuario dos números y los almacenamos en las variables n1 y n2
    n1 = float(input("Introduce el primer valor: "))
    n2 = float(input("Introduce el segundo valor: "))
    
    # Solicitamos al usuario el tipo de operación a realizar y lo almacenamos en la variable operacion
    operacion = input("SELECCIONA LA OPERACIÓN A REALIZAR (SUMA, RESTA, MULT, DIV): ")

    if operacion == "SUMA":
        # Realiza la suma y muestra el resultado
        resultado = n1 + n2
        print(f"{n1} + {n2} = {resultado}")
        # Las f-strings permiten incorporar valores de variables dentro de una cadena de texto.
        # En este caso, {n1}, {n2}, y {resultado} son marcadores que indican dónde se insertarán 
        # los valores de las variables. Cuando se ejecuta la línea, los valores actuales de n1, n2
        # y resultado se reemplazan en esos lugares, lo que da como resultado una cadena formateada
        # que muestra el cálculo realizado de manera clara. Es una forma de
        # combinar texto y valores en una salida de impresión.

    elif operacion == "RESTA":
        # Realiza la resta y muestra el resultado
        resultado = n1 - n2
        print(f"{n1} - {n2} = {resultado}")
    elif operacion == "MULT":
        # Realiza la multiplicación y muestra el resultado
        resultado = n1 * n2
        print(f"{n1} x {n2} = {resultado}")
    elif operacion == "DIV":
        if n2 == 0:
            # Manejamos el caso de división entre cero
            print("Error: No se puede dividir por cero.")
        else:
            # Realiza la división y muestra el resultado
            resultado = n1 / n2
            print(f"{n1} / {n2} = {resultado}")
    else:
        # Muestra un mensaje de operación no válida si se introduce una operación incorrecta
        print("Operación no válida. Por favor, elige entre SUMA, RESTA, MULT o DIV.")

    while True:
        # Pregunta al usuario si desea hacer más operaciones y almacena la respuesta en la variable respuesta
        respuesta = input("¿Deseas hacer más operaciones? (s/n): ")
        if respuesta == 's':
            # Si la respuesta es 's', se rompe el bucle interno y se solicitan nuevos números
            break
        elif respuesta == 'n':
            # Si la respuesta es 'n', se sale del programa
            exit()
        else:
            # Si la respuesta no es válida, muestra un mensaje de error y repite la pregunta
            print("Caracter inválido. Introduce solo 's' o 'n'.")
