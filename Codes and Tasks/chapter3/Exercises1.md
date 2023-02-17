 ## 3.1-1
 ### Let f(n) and g(n) be asymptotically nonnegative functions. Using the basic definition of Θ-notation, prove that max ( f(n) , g(n) ) = Θ ( f(n) + g(n) )
 - using  Θ-notation
     - 0 ≤ C1 g(n) ≤ F(n) ≤ C2 g(n)
         - 0 ≤ C1 ( f(n) + g(n) ) ≤ max ( f(n) , g(n) ) ≤  C2 ( f(n) + g(n) )
     - for all n ≥ n0
         - f(n) + g(n) ≥ max ( f(n) , g(n) )
     - by using O-notation and Ω-notatio 
     -  0 ≤ F(n) ≤ C g(n) and  0 ≤ C g(n) ≤ F(n)
         - F(n) ≤ max ( f(n) , g(n) ) => 1
         - g(n) ≤  max ( f(n) , g(n) ) => 2
     - adding 1 , 2 
         -  f(n) + g(n) ≤ 2  max ( f(n) , g(n) )
         - 1/2 f(n) + g(n) ≤ max ( f(n) , g(n) )
     - 0 ≤ 1/2 f(n) + g(n) ≤ max ( f(n) , g(n) ) ≤ ( f(n) + g(n) ) for all n ≥ n0
         -  C1 = 1/2 
         - C2 = 1
 - so max ( f(n) , g(n) ) = Θ ( f(n) + g(n) )
 ---
                  
​
 
⁡


