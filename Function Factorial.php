#Function 1:
def factorial(n):
  result = 1
  for i in range(1,n+1) : 
    result *= i 
  print(result)
factorial(5)  

#Function 2:
def factorial(n):
  if n ＜１：
    return 1
  else:
    return n*factorial(n-1)
result = factorial(5)
