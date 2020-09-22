package com.example.a213.pinkbeam;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLEncoder;
import java.util.Vector;

/**
 * Created by 213 on 2018-10-26.
 */

public class SignupPage extends Activity {

    private EditText editTextId, editTextPw, editTextPw2, editTextname, editTextjumin1,editTextjumin2, editTextphone,editTextmonth;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_signup);

        editTextId = (EditText) findViewById(R.id.new_id);
        editTextPw = (EditText) findViewById(R.id.new_pw);
        editTextPw2 = (EditText) findViewById(R.id.new_pw2);
        editTextname = (EditText) findViewById(R.id.new_name);
        editTextjumin1 = (EditText) findViewById(R.id.new_jumin1);
        editTextjumin2= (EditText) findViewById(R.id.new_jumin2);
        editTextphone = (EditText) findViewById(R.id.new_phone);
        editTextmonth = (EditText) findViewById(R.id.new_month);

    }
    public void insert(View view) {



        String Id = editTextId.getText().toString();
        String Pw = editTextPw.getText().toString();
        String Pw2 = editTextPw2.getText().toString();
        String name = editTextname.getText().toString();
        String jumin1 = editTextjumin1.getText().toString();
        String jumin2 = editTextjumin2.getText().toString();
        String phone = editTextphone.getText().toString();
        String month = editTextmonth.getText().toString();



        if (Id.length()==0){
            Toast.makeText(SignupPage.this, "아이디를 입력하세요.", Toast.LENGTH_SHORT).show();
        }
        else if (Pw.length()==0){
            Toast.makeText(SignupPage.this, "비밀번호를 입력하세요.", Toast.LENGTH_SHORT).show();
        }
        else if (!(Pw.equals(Pw2))) {
            Toast.makeText(SignupPage.this, "비밀번호가 틀립니다", Toast.LENGTH_SHORT).show();
        }
        else if (name.length()==0){
            Toast.makeText(SignupPage.this, "이름을 입력하세요.", Toast.LENGTH_SHORT).show();
        }
        //    else    if(!jumintest(jumin1,jumin2)){
        //     Toast.makeText(SignupPage.this, "주민번호 x", Toast.LENGTH_SHORT).show();
        //  }
        //  else if(Integer.parseInt(jumin2) / 1000000 != 2){
        //      Toast.makeText(SignupPage.this, "여자 x", Toast.LENGTH_SHORT).show();
        //  }

        else if (phone.length()==0){
            Toast.makeText(SignupPage.this, "전화번호를 입력하세요.", Toast.LENGTH_SHORT).show();
        }
        else if (month.length()==0){
            Toast.makeText(SignupPage.this, "개월수를 입력하세요.", Toast.LENGTH_SHORT).show();
        }

  // else if (Integer.parseInt(month)>12){
        //Toast.makeText(SignupPage.this, "허용 가능한 개월수를 초과하셨습니다.", Toast.LENGTH_SHORT).show();
  //   }

        else{
            insertoToDatabase(Id, Pw,name, jumin1, jumin2, phone, month);
        }

    }

    public boolean jumintest(String jumin1, String jumin2){



        if (!(jumin1.length()==6)){
            Toast.makeText(getApplicationContext(),"앞자리 6자리 숫자를 정확하게 입력해라",Toast.LENGTH_LONG).show();
            return false;
        }else  if (!(jumin2.length()==7)){
            Toast.makeText(getApplicationContext(),"뒷자리 7자리 숫자를 정확하게 입력해라", Toast.LENGTH_LONG).show();
            return  false;
        }    // 앞 , 뒤 민번 정확하게 입력했는지 판단


        String text = jumin1+ jumin2;
        Vector vdata = new Vector();
        for (int i = 0; i < text.length(); i++) {
            vdata.add(Integer.parseInt(text.substring(i, i + 1)));
        }
        int sum = 0;
        int[] multipliers = { 2, 3, 4, 5, 6, 7, 8, 9, 2, 3, 4, 5 };
        for (int i = 0; i < vdata.size() - 1; i++) {
            sum += (((Integer) vdata.get(i)).intValue() * multipliers[i]);
        }
        int lastnum = ((11 - (sum % 11)) % 10);

        int result = jumin2.charAt(6) - 48;
        System.out.println(result);


        if (lastnum == result) {
            return true;
        } else {
            return false;
        }

    }



    private void insertoToDatabase(String Id, String Pw, String name, String jumin1, String jumin2, String phone, String month) {

        class InsertData extends AsyncTask<String, Void, String> {
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(SignupPage.this, "Please Wait", null, true, true);
            }
            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(getApplicationContext(), s, Toast.LENGTH_LONG).show();
            }
            @Override
            protected String doInBackground(String... params) {

                try {


                    String Id= (String) params[0];
                    String Pw = (String)params[1];

                    String name = (String) params[2];
                    String jumin1 = (String) params[3];
                    String jumin2 = (String) params[4];
                    String phone = (String) params[5];
                    String month = (String) params[6];

                    String link = "http://ci2018forward.dongyangmirae.kr/and/post.php";


                    String data = URLEncoder.encode("Id", "UTF-8") + "=" + URLEncoder.encode(Id, "UTF-8");
                    data += "&" + URLEncoder.encode("Pw", "UTF-8") + "=" + URLEncoder.encode(Pw, "UTF-8");
                    data += "&" + URLEncoder.encode("name", "UTF-8") + "=" + URLEncoder.encode(name, "UTF-8");
                    data += "&" + URLEncoder.encode("jumin1", "UTF-8") + "=" + URLEncoder.encode(jumin1, "UTF-8");
                    data += "&" + URLEncoder.encode("jumin2", "UTF-8") + "=" + URLEncoder.encode(jumin2, "UTF-8");
                    data += "&" + URLEncoder.encode("phone", "UTF-8") + "=" + URLEncoder.encode(phone, "UTF-8");
                    data += "&" + URLEncoder.encode("month", "UTF-8") + "=" + URLEncoder.encode(month, "UTF-8");

                    URL url = new URL(link);
                    URLConnection conn = url.openConnection();

                    conn.setDoOutput(true);
                    OutputStreamWriter wr = new OutputStreamWriter(conn.getOutputStream());

                    wr.write(data);
                    wr.flush();

                    BufferedReader reader = new BufferedReader(new InputStreamReader(conn.getInputStream()));

                    StringBuilder sb = new StringBuilder();
                    String line = null;

                    // Read Server Response
                    while ((line = reader.readLine()) != null) {
                        sb.append(line);
                        break;
                    }
                    return sb.toString();
                } catch (Exception e) {
                    return new String("Exception: " + e.getMessage());
                }
            }
        }

        InsertData task = new InsertData();

        task.execute(Id, Pw, name, jumin1,jumin2,phone,month);
        startActivity((new Intent(SignupPage.this, MainActivity.class)));
        finish();
    }
}
