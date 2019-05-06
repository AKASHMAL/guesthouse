#include <iostream>
using namespace std;
int main()
{
    int n;
    cin>>n;
int b[n+1],p[n+1],tat[n+1],i,j,temp,ct=0,w[n+1],ttat=0,twt=0;
for(i=0;i<n;i++)
{p[i]=i;
    cin>>b[i];
}
for(i=0;i<n;i++)
{
    for(j=i+1;j<=n;j++)
    {
        if(b[j]<b[i])
        {
            temp=b[i];
            b[i]=b[j];
            b[j]=b[i];
            temp=p[i];
            p[i]=p[j];
            p[j]=p[i];
            
            
        }
    }
    
}
for(i=0;i<n;i++)
{
    ct=ct+b[i];
    tat[i]=ct;
    w[i]=tat[i]-b[i];
    ttat+=tat[i];
    twt+=w[i];
    cout<<"F"<<p[i]<<" "<<b[i]<<" "<<w[i]<<" "<<tat[i];
}
cout<<"total wating time="<<twt/n;
cout<<"total turnaround time="<<ttat/n;
    return 0;
}
