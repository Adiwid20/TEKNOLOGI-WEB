import turtle

t = turtle.Turtle()
s = turtle.Screen()

s.bgcolor('#000000')
t.pencolor('#ffffff')
t.speed(100)


col =('yellow', 'blue', 'red', 'ligth green', 'violet','cyan','brown')

for n in range(10):
    for x in range(8):
        t.speed(25)
        for i in range(2):
            t.pensize(5)
            t.circle(100+n*25,90)
            t.lt(90)
        t.lt(45)
    t.pencolor(col[n%10])
turtle.mainloop()
# s.exitonclick()
# turtle.done()