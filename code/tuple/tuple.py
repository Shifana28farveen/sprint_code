a = ("c","c++","java","python")
print(a)
b = a. index("java")
print(b)
print(a.index("python"))
print(len(a))
tuple1  =  ("c","c++","java","python")
tuple2 = (1,2,3,4)
tuple3  = (True, False)
tuple4 = ("c++",2,True, "java")
print(tuple4)
a = ("apple", "ball","cat","dog")
print(a[1])
a = ("apple", "ball","cat","dog")
print(a[-1])
print(a[1:3])
print(a[-1:])
print(a[::-1])
if "ball" in a:
    print("The value is present")
b = list(a)
print(b)
t = ("a","b", "c","d")
b = list(t)
print(b)
b[1] = "9"
b.append("f")
print(b)
t= tuple(b)
print(t)
t1 = ("a","b","c","d")
t2 = ("9",)
t1 += t2
print(t1)
a = ("a","b","c","d")
b = list(a)
b.remove("c")
print(b)

details = ("Shifana","farveen","22")
(First_name ,Last_name ,Age)= details
print(Last_name)
print(First_name)
print(Age)

detailss = ("Shifana","Sowmya","Swetha","Pavithra")
(Green, Red, *Blue) = detailss
print(detailss)
print(Blue)

tuple = ("a","b","c","d","e")
for x in tuple:
    print(x)
    if x == "c":
        break

for x in tuple:
    if x =="c":
        continue
        print(x)
for x in range(100):
    print(x)
    if x == 19:
        break
        print(x)

for x in range(2,5,10):
    print(x)
else:
    print("Finished")

for x in range(10):
    print(x)
    if x == 5:
        break
else:
 print("finished")

tuple1 = ("a","b","c","d","e")
tuple2 = ("apple","ball","cat","dog")

for y in tuple2:
    print(y)
    if y == "cat":
        break






