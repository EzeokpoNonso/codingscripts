# Keep your programs and code organised...with OOP -> Data/Atrribute+Function/Method

#todo: A basic class
class Book:
    # the 'init' called to create and initialise the instance of a class
    def __init__(self, title, author, pages, price):
        # class properties
        self.title = title
        self.author = author
        self.pages = pages
        self.price = price
        self.__secret = "this is a secret" #? just an underfined attribute to make a point
    #todo: an instance method
    def getprice(self):
        # check if attr is present/defined then run code
        if hasattr(self, "_discount"):
            return self.price - (self.price * self._discount)
        else:
            return self.price

    def setdiscount(self, amount):
        self._discount = amount #? that other devs may now u can only access this from within the class

#todo: instance of the class
b1 = Book("No more two", "G.Akanni", 200, 20.22)
b2 = Book("Fulfilling MR", "G.Akanni", 120, 20.15)

#todo: print class and property
print(b1)
print(b1.title)

#todo: pring price of books
print(b1.getprice())
print(b2.getprice())

# todo: set a discount
b2.setdiscount(0.5)
print(b2.getprice())

#todo: print secret attribute
print(b2.__secret) #? this will show an error because
print(b2._Book__secret) #? should work...though not a perfect solution