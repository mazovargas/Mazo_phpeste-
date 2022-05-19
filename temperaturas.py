
tempmax=0
tempmin=0
temperatura=0

while temperatura != -99 :
     temperatura=int(input("ingrese su temperatura: "))
     if temperatura > tempmax:
         tempmax=temperatura
     if temperatura < tempmin:
         tempmin=temperatura
print("la temperatura maxima es: "tempmax)
print("la temperatura minima es: "tempmin)
    

         


