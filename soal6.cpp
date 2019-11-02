#include <iostream>
#include<vector>
#include<stdlib.h>
#include <algorithm>
using namespace std;

const int row1= 3;
const int col1 = 5;
const int row2= 3;
const int col2 = 5;

int main ()
{
    string data[row1][col1]={
        {"a", "c", "b","e","d"},
        {"g", "e" ,"f"}
    };
    string data2[row2][col2]={
      {"g", "h", "i","j"},
        {"a", "c", "b","e","d"},
        {"g", "e" ,"f"}
    };


//matrix 1
for(int i = 0; i < 3; i++) {
    std::sort(data[i],data[i]+5);
  }
    for(int x=0;x<row1;x++){
        for(int j=0;j<=col1;j++){
            cout<<data[x][j];      
   }  cout<<endl;

    }



//matrix2
 for(int i=0;i<row1;++i){
        for(int j=0;j<col1;++j){
            cout<<data2[i][j];
        }
        cout<<endl;
    }
    return 0;
}