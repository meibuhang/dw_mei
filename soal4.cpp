#include <iostream>
using namespace std;
 
int hitung_barang (char kw,int byk){
  int harga,potongan,tot,jum;
  int totalbyr; 
  potongan=0;
switch (kw)
{
  case 'A':
  case 'a' :
        harga=3000;
        if (byk > 10)
        {
          cout <<"Dapat Potongan hingga 17% off !"<<endl;
          potongan=500;
        }
        else {
          potongan=0;
        }
    break;
  case 'B':
  case 'b' :
          harga=3500;
          if (byk > 5)
          {
            cout << "Dapat potongan 50% !"<<endl;
            potongan=harga*50/100;
          }
          else {
            potongan=0;
          }
      break;
  case 'C':
  case 'c' :
         harga=5000;
         cout <<"Tak ada Diskon !" <<endl;
         break;
         default:
		cout << "Gagal, coba lagi." << endl; 
	}

 tot=harga*byk;
 totalbyr = byk * (harga-potongan);
 jum=tot-totalbyr;
 cout << "Total harga barang Sebenarnya : Rp" <<tot<<endl;
 cout << "dapat Potongan : Rp" <<jum<<endl;
 cout << "Total Bayar : Rp"<<totalbyr<<endl;
return jum;
}


int main(){
char a;
int b,hasil;
cout<<"Selamat Datang, Berikut Produk Kami "<<endl;
cout<<"-----------------------------------"<<endl;
cout << "Barang A, Harga Rp 3000"<<endl;
cout << "Barang B, Harga Rp 3500"<<endl;
cout << "Barang C, Harga 5000"<<endl;
cout<<"-----------------------------------"<<endl;
cout<<"Masukkan Type Barang ( A / B / C) :"; cin>>a;
cout<<"Jumlah Barang ";cin>>b;
cout<<endl;
hasil = hitung_barang(a,b);

cin.get();
return 0;
}
