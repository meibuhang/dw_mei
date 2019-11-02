#include <iostream>
using namespace std;

 
int UangKembali (int x, int y)
{
int uangbalik,a,a1,b,b1,c,c1,d,d1,e,e1,f,f1;
uangbalik= x-y;
if (x==y)
{
  cout <<"uang anda cukup" <<endl;
  cout <<"Terimakasih sudah berbelanja" <<endl;
}else
if (x<y)
{
cout << "Uang anda Kurang - Rp " <<uangbalik<<endl;
}else
{
  a=uangbalik%50000;
a1=uangbalik/50000;
b=a%20000;
b1=a/20000;
c=b%10000;
c1=b/10000;
d=c%5000;
d1=c/5000;
e=d%2000;
e1=d/2000;
f=e%500;
f1=e/500;

 cout<<"-------------------------------------------"<<endl;
cout<<a1<<"lembar Rp.50000"<<endl;
cout<<b1<<"lembar Rp.20000"<<endl;
cout<<c1<<"lembar Rp.10000"<<endl;
cout<<d1<<"lembar Rp.5000"<<endl;
cout<<e1<<"lembar Rp.2000"<<endl;
cout<<f1<<"lembar Rp.500"<<endl;
cout<<"-------------------------------------------"<<endl; 
  

}

return uangbalik;
}

int main()
{
 int c = 110500;
  int uangX,proses;
  cout << "selamat datang di Vending Machine"<<endl;
  cout <<"Total Belanja : Rp "<<c<<endl;
  cout <<"Input Uang Anda : Rp "<<endl;
  cin>>uangX;
  proses= UangKembali(uangX,c);
  cout<<"Uang Kembali : Rp "<<proses;
  cin.get();
    return 0;
}