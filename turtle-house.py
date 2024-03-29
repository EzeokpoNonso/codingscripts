import turtle

t = turtle.Turtle()

# How to draw  a house
t.penup()
t.goto(-250,80)
t.pendown()

# block work
t.fillcolor('skyblue')
t.begin_fill()
t.forward(300)
t.right(90)
t.forward(150)
t.right(90)
t.forward(300)
t.right(90)
t.forward(150)
t.right(90)
t.end_fill()

# roof
t.fillcolor('grey')
t.begin_fill()
t.right(180)
t.forward(50)
t.right(120)
t.forward(80)
t.right(60)
t.forward(300)
t.right(60)
t.forward(80)
t.right(120)
t.forward(50)
t.end_fill()

# window
t.penup()
t.forward(100)
t.right(-90)
t.forward(50)
t.fillcolor('purple')
t.begin_fill()
t.forward(50)
t.right(-90)
t.forward(50)
t.right(-90)
t.forward(50)
t.right(-90)
t.forward(50)
t.right(-90)
t.end_fill()

# door
t.penup()
t.forward(100)
t.right(-90)
t.forward(50)
t.fillcolor('brown')
t.begin_fill()
t.right(180)

t.pendown()
t.fillcolor('brown')
t.begin_fill()
t.forward(160)
t.right(90)
t.forward(100)
t.right(-90)
t.forward(60)
t.right(-90)
t.forward(100)
t.end_fill()
