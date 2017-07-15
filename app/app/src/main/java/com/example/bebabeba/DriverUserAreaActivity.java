package com.example.bebabeba;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class DriverUserAreaActivity extends AppCompatActivity {

    public String name, email, v_type, l_plate, phone_no, password;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_driver_user_area);

        final TextView welcomeMessage = (TextView) findViewById(R.id.tvWelcomeMsg);
        final TextView tvEmailAddress = (TextView) findViewById(R.id.tvEmailAddress);

        final TextView tvVehicleType = (TextView) findViewById(R.id.tvVehicleType);
        final TextView tvLicensePlate = (TextView) findViewById(R.id.tvLicensePlate);
        final TextView tvPhoneNumber = (TextView) findViewById(R.id.tvPhoneNumber);
        final Button bCharges = (Button) findViewById(R.id.bCharges);
        final Button bUpdate = (Button) findViewById(R.id.bUpdate);

        Intent intent = getIntent();
        name = intent.getStringExtra("name");
        email = intent.getStringExtra("email");
        v_type = intent.getStringExtra("v_type");
        l_plate = intent.getStringExtra("l_plate");
        phone_no = intent.getStringExtra("phone_no");
        password = intent.getStringExtra("password");

        String message = name+" welcome to Bebabeba";
        welcomeMessage.setText(message);
        tvEmailAddress.setText(email);

        tvVehicleType.setText(v_type);
        tvLicensePlate.setText(l_plate);
        tvPhoneNumber.setText(phone_no);

        saveInfo();

        bCharges.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent driverPintent = new Intent(DriverUserAreaActivity.this, SetCharges.class);
                driverPintent.putExtra("email", email);
                DriverUserAreaActivity.this.startActivity(driverPintent);
            }
        });

        //edit button listener
        bUpdate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent driverUpdateintent = new Intent(DriverUserAreaActivity.this, DriverUpdateActivity.class);
                //driverPintent.putExtra("email", email);
                DriverUserAreaActivity.this.startActivity(driverUpdateintent);
            }
        });
    }

    //Shared preferences
    public void saveInfo() {
        SharedPreferences sharedpref = getSharedPreferences("driverAllInfo", Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = sharedpref.edit();
        editor.putString("name", name);
        editor.putString("email", email);
        editor.putString("v_type", v_type);
        editor.putString("l_plate", l_plate);
        editor.putString("phone_no", phone_no);
        editor.putString("password", password);

        editor.apply();

        Toast.makeText(this, "Info saved!", Toast.LENGTH_LONG).show();
    }
}
