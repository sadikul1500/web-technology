alert('Boss Arman is nearby!!!');

for(i=0; i<10; i++)
{
    str = str + i + ',';
}

while(i<11)
{
    if(i == 2)
    {
        i = i+1;
        continue;
    }
    if (i > 5) break;
    str = str + i + ',';  
    i = i+1;
 }

function add(a, b)
{
    return a + b;
}