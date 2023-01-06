
# Q1:Bogard Corporation

z1 <- c(8,6,10);
m1 <- matrix (c(0.2,0.6,0.4,0.4,0.2,0.4,0.6,0.5,0.4) , ncol=3);
d1 <- c("<=","<=","<=");
r1 <- c(150,150,200);

library ( lpSolve );
sol1<-lp("max",z1,m1,d1,r1)$solution
obj1<-lp ( "max" , z1 , m1, d1 , r1)$objv
print("The objective of the function is")


library(lpSolveAPI)

x1 = read.lp("d:\\question1.txt" , "lp")

solve (x1); get.objective(x1);get.variables(x1);




# Q2:


library(lpSolveAPI)
x2<- read.lp("d:\\question2.txt","lp")
solve(x2); get.objective(x2);get.variables(x2)

initial<-40
batter<-c(5,2)
usage<-sum(get.variables(x2)*batter)
left_after_usage<-initial-sum(get.variables(x2)*batter)
usage; left_after_usage;

#Q3:



library(lpSolveAPI)
x3 = read.lp("d:\\class2.txt","lp")
solve (x3); get.objective(x3); get.variables(x3)




## Q4: MEAN , MEDIAN AND MODE

## MEAN


x<-c(1,2,3,4,5,5,5,6,7,8)  
mean(x)
mode(x)
median(x)##CREATING A NUMERIC VECTOR X
l<-length(x)                                              ##LENGTH OF THE VECTOR
sum_elements<-sum(x)                                      ##SUM OF ALL THE ELEMENTS IN THE VECTOR X
x_mean<-sum_elements/length(x)                              ##CALCULATING MEAN=??x/N
           
mean(x);x_mean;

## MEDIAN 

## TO FIND THE MEDIAN WE FIRST SORT THE VECTOR

for(i in 1:(length(x)-1)){                              ## CREATING TWO LOOPS IN WHICH EVERY iTH INDEXED ELEMENT in VECTOR X
    for(j in (i+1):length(x)){                          ## IS COMPARED WITH ALL THE OTHER ELEMENTS OF X FROM INDEX i+1
      if(x[i]>x[j]){                                    ## TILL END OF VECTOR X AND IF THE ELEMENT OF VECTOR AT INDEX                                    
        x[c(i,j)]=x[c(j,i)]                             ## (i)>(i+1) WE EXCHANGE THE VALUES
      }
    }
}

## NEXT WE FIND THE MIDDLE ELEMENT

if (length(x) %% 2 == 0 )   ##IF VECTOR HAS EVEN NUMBER OF ELEMENTS MEDIAN IS AVG OF THE MIDDLE TWO NUMBERS OF THE SORTED LIST
{                                                         
  x_median<-( x[(l+1)%/%2]+x[((l+1)%/%2)+1] )/2        
  }else{
  x_median<- x[(l+1)/2]       ## IF VECTOR HAS ODD NUMBER OF ELEMENTS MEDIAN IS THE VALUE AT INDEX (N+1)/2 WHERE N IS THE NUMBER OF ELEMENTS IN X
         }
median(x);x_median;

## MODE 

## MODE_CNT IS USED TO TEMPORARILY STORE HOW MANY TIMES A VALUE AT A PARTICULAR INDEX IN VECTOR REPEATS
## MAX_COUNT IS USED TO STORE MAXIMUM VALUE OF MODE_CNT
## X_MODE IS USED TO STORE THE FINAL MODE VALUE

for(i in 1:(length(x)-1)){              ##EVERY iTH INDEXED ELEMENT in VECTOR X IS COMPARED WITH ALL THE OTHER ELEMENTS OF X FROM INDEX i+1
  for(j in (i+1):length(x)){            ##TILL END OF VECTOR X AND IF THE ELEMENT OF VECTOR AT INDEX i=i+1 WE INCREASE THE MODE_CNT VALUE.
    if(x[i]==x[j]){
      mode_cnt<-mode_cnt+1
      if(mode_cnt>max_cnt){           ##IF ELEMENT AT iTH INDEX HAS IT'S MODE_CNT GREATER THAN MAX_COUNT THEN MAX_COUNT VALUE IS REASSIGNED
        max_cnt<-mode_cnt             ## WITH MODE_CNT AND THE CORRESPONDING ELEMENT AT iTH INDEX IS THE MODE OF THE VECTOR.
        x_mode<-x[i]
        mode_cnt<-c(0) 
                  }
    }
  }
                    ## AFTER EVERY ITERATION OF THE OUTER LOOP SINCE WE WILL BE SHIFTING TO A DIFFERENT VALUE THE MODE_CNT SHOULD BE RESET                   
}
x_mode;

x_mean;x_median;x_mode



