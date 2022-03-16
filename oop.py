# Keep your programs and code organised...with OOP -> Data/Atrribute+Function/Method

#todo: A basic class
class Book:
    def __init__(self, title):
        self.title = title

#todo: instance of the class
b1 = Book("No more two")
b2 = Book("Fulfilling MR")

#todo: print class and property
print(b1)
print(b1.title)