package com.example.bebabeba;

import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class SetCharges extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_set_charges);

        final EditText etPrice = (EditText) findViewById(R.id.etPrice);
        final Button bSubmitPrice = (Button)findViewById(R.id.bSubmitPrice);

        bSubmitPrice.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = getIntent();
                final String Price = etPrice.getText().toString();
                final String email = intent.getStringExtra("email");

                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonResponse = new JSONObject(response);
                            boolean success = jsonResponse.getBoolean("success");
                            boolean validated = jsonResponse.getBoolean("validated");

                            if(validated){
                                if(success){
                                    Toast.makeText(getApplicationContext(), "Price updated successfully!!", Toast.LENGTH_LONG).show();
                                    Intent driverMintent = new Intent(SetCharges.this, DriverMapActivity.class);
                                    SetCharges.this.startActivity(driverMintent);
                                }else{
                                    Toast.makeText(getApplicationContext(), "Error!!", Toast.LENGTH_LONG).show();
                                }

                            }else{
                                String error = jsonResponse.getString("error");
                                AlertDialog.Builder builder = new AlertDialog.Builder(SetCharges.this);
                                builder.setMessage(error)
                                        .setNegativeButton("Retry", null)
                                        .create()
                                        .show();
                            }
                        }catch (JSONException e){
                            e.printStackTrace();
                        }
                    }
                };
                DriverSetPriceRequest driverSetPriceRequest = new DriverSetPriceRequest(Price, email, responseListener);
                RequestQueue queue = Volley.newRequestQueue(SetCharges.this);
                queue.add(driverSetPriceRequest);
            }
        });

    }
}
