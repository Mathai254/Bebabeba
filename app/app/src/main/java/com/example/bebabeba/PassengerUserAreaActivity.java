package com.example.bebabeba;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.TextView;

public class PassengerUserAreaActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener {

    public String vehicle_selected;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_passenger_user_area);

        final TextView welcomeMessage = (TextView) findViewById(R.id.tvWelcomeMsg);
        final TextView tvEmailAddress = (TextView) findViewById(R.id.tvEmailAddress);

        final TextView tvPhoneNumber = (TextView) findViewById(R.id.tvPhoneNumber);
        final Button bSearch = (Button) findViewById(R.id.bSearch);

        final Spinner spinner = (Spinner) findViewById(R.id.vSpinner);
        ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(this,R.array.vehicle_types, android.R.layout.simple_spinner_item);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);

        spinner.setOnItemSelectedListener(this);

        Intent intent = getIntent();
        final String name = intent.getStringExtra("name");
        final String email = intent.getStringExtra("email");

        final String phone_no = intent.getStringExtra("phone_no");

        String message = name+" welcome to Bebabeba";
        welcomeMessage.setText(message);
        tvEmailAddress.setText(email);

        tvPhoneNumber.setText(phone_no);

        bSearch.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(PassengerUserAreaActivity.this, PassengerMapActivity.class);
                intent.putExtra("v_type", vehicle_selected);
                intent.putExtra("email", email);
                PassengerUserAreaActivity.this.startActivity(intent);
            }
        });
    }

    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
        vehicle_selected = parent.getItemAtPosition(position).toString();
    }

    @Override
    public void onNothingSelected(AdapterView<?> parent) {

    }

}
