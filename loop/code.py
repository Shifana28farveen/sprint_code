numbers = {15,22,17,30,27,24,21}
for num in numbers:
  if num <= 20:
    continue
  if num % 2 == 0:
      print("First even number greater than 20:", num)
      break

list = ["c", "c++", "python", "java", ".net"]
a = input("enter your choice:")
for x in list:
    if a == "c":
        print("you got c")
        break
    elif a == "c++":
        print("you got c++")
        break
    elif a == "python":
        print("you got python")
        break
    elif a == "java":
        print("you got java")
        break
    elif a == ".net":
        print("you got .net")
        break
    else:
        print("there is nothing")

x = 0
flag = True
while flag:
    x += 1
    print(x)
    if x == 5:
        flag = False

dict = {"name": "Shifana", "age": "22", "gender": "feminine"}
for x in dict.values():
    print(x)

set = {"1", "2", "3", "4"}
for x in set:
    print(x)

tuple = ("car", "tokyo", "new jersey")
for x in tuple:
    print(x)
    if x == "tokyo":
        break

i = 1
while i < 6:
  print(i)
  i += 1
  if i == 3:
      continue

  fruits = ["apple", "banana", "cherry"]
    for x in fruits:
      if x == "banana":
          break
      print(fruit)

i = 0
while i < 6:
  i += 1
  if i == 3:
    continue
  print(i)


my_dict = {"name": "Shifana", "age":"22","gender":"feminine"}
for item in my_dict.values():
  print(item)

numbers = [15,20,25,30,35,40]
for num in numbers:
  if num <= 20:
    continue
    if num % 2 == 0:
      print("First even number greater than 20:", num)
  break

