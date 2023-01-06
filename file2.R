
z<- c(20,5)
m<- matrix( c(5,2) , byrow=TRUE )
d<- c(">=")
r<- c(40)
library ( lpSolve )
print(lp ( "min" , z1 , m1 , d1 , r1 )$solution)
print(lp ( "min" , z1 , m1 , d1 , r1 )$objv)



x = read.lp("d:\\OUT.txt" , "lp")

solve (x)
get.objective(x)
get.variables(x)

