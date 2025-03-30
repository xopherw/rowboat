import firebase_admin, os, json
from firebase_admin import credentials
from firebase_admin import firestore
from fastapi import FastAPI
# from firebase import firebase


cred = credentials.Certificate('rowboat-dating-firebase-adminsdk-fbsvc-48050d25c7.json')
default_app = firebase_admin.initialize_app(cred)
db = firestore.client()

app = FastAPI()

@app.get("/")
async def root():
    return {"message": "Hello World"}

@app.post("/add_user")
async def add_user(first_name: str, last_name: str, email: str, age: int):
    user = {
        "first_name": first_name,
        "last_name": last_name,
        "email": email, 
        "age": 35,
    }
    db.collection("users").add(user)
    return {"message": "User added successfully"}

