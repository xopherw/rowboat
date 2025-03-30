import firebase_admin, os, json
from firebase_admin import credentials
from firebase_admin import firestore
from fastapi import FastAPI, Query
from typing import Annotated
from pydantic import BaseModel
from models import *
# from firebase import firebase


cred = credentials.Certificate('rowboat-dating-firebase-adminsdk-fbsvc-48050d25c7.json')
default_app = firebase_admin.initialize_app(cred)
db = firestore.client()

app = FastAPI()

@app.get("/")
async def root():
    return {"message": "Hello World"}

@app.post("/add_user")
async def add_user(user: User):
    db.collection("users").add(user)
    return {"message": "User added successfully"}

